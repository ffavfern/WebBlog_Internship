// CLICK
document.addEventListener(
  "click",
  function (event) {
    if (event.target.closest(".sp-product")) {
      if (!event.target.closest(".amount")) {
        var sp_id,
          sp_name,
          sp_price,
          sp_sum,
          sp_num,
          sp_all,
          sp_active = [];
        const sp_product = event.target.closest(".sp-product");

        sp_price = sp_product.querySelector(".sp-price").dataset.price;
        sp_name = sp_product.querySelector("h3").innerHTML;

        sp_id = sp_product.getAttribute("id");

        if (sp_product.classList.contains("active")) {
          sp_product.classList.remove("active");
          sp_product.querySelector(".info > .amount > .num").value = 0;

          if (document.getElementById("row-" + sp_id) != null) {
            document.getElementById("row-" + sp_id).remove();
          }
        } else {
          sp_product.classList.add("active");
          sp_product.querySelector(".info > .amount > .num").value = 1;

          sp_num = sp_product.querySelector(".info > .amount > .num").value;
          sp_sum = sp_num * sp_price;
          createdTableRow(sp_id, sp_name, sp_num, sp_sum);
        }

        sp_all = document.querySelectorAll(".sp-product");
        for (var n = 0; n < sp_all.length; n++) {
          if (sp_all[n].classList.contains("active")) {
            sp_active.push("yes");
          } else {
            sp_active.push("no");
          }
        }
        if (sp_active.includes("yes")) {
          document.getElementById("sum").classList.add("active");
        } else {
          document.getElementById("sum").classList.remove("active");
        }

        allPrice();
      }
    }

    // Product
    var sprice, num, numCount, result, pid, pname, pnum, psum;
    var product_select = [];

    if (event.target.closest(".minus") || event.target.closest(".plus")) {
      var stable = document.getElementById("sum");
      var stbody = stable.getElementsByTagName("tbody")[0];
      for (var i = 0, row; (row = stbody.rows[i]); i++) {
        product_select.push(stbody.rows[i].getAttribute("id"));
      }
      stable.classList.add("active");
    }

    if (event.target.closest(".minus")) {
      num = event.target.parentNode.querySelector(".num");
      numCount = num.value;

      result = 0;
      if (numCount > 0) {
        result = parseInt(numCount) - 1;
      }
      num.value = result;

      sprice = event.target.closest(".sp-product").querySelector(".sp-price").dataset.price;
      pname = event.target.closest(".sp-product").querySelector("h3").innerHTML;
      pid = event.target.closest(".sp-product").getAttribute("id");
      pnum = result;
      psum = result * sprice;

      if (!product_select.includes("row-" + pid) && pnum > 0) {
        createdTableRow(pid, pname, pnum, psum);
      } else {
        if (pnum > 0) {
          insertData(pid, pnum, psum);
        } else {
          document.getElementById(pid).click();
          if (document.getElementById("row-" + pid) != null) {
            document.getElementById("row-" + pid).remove();
          }
        }
      }

      allPrice();
    }

    if (event.target.closest(".plus")) {
      num = event.target.parentNode.querySelector(".num");
      numCount = num.value;
      result = parseInt(numCount) + 1;

      num.value = result;

      sprice = event.target.closest(".sp-product").querySelector(".sp-price").dataset.price;
      pname = event.target.closest(".sp-product").querySelector("h3").innerHTML;
      pid = event.target.closest(".sp-product").getAttribute("id");
      pnum = result;
      psum = result * sprice;

      if (!product_select.includes("row-" + pid)) {
        createdTableRow(pid, pname, pnum, psum);
      } else {
        insertData(pid, pnum, psum);
      }

      allPrice();
    }

    // COPY
    if (event.target.closest("#acc-copy")) {
      const acc_copy = document.getElementById("acc-copy");
      document.getElementById("acc-no").select();
      if (document.execCommand("copy")) {
        acc_copy.classList.add("copied");
        var temp = setInterval(function () {
          acc_copy.classList.remove("copied");
          clearInterval(temp);
        }, 1200);
      }
    }
  },
  false
);

// ADD PRODUCTS
var page_table, page_tbody, page_foot;
page_table = document.getElementById("sum");
page_tbody = page_table.getElementsByTagName("tbody")[0];
page_foot = page_table.getElementsByTagName("tfoot")[0];

function createdTableRow(id, name, num, price) {
  var tr, td_1, td_2, td_3;

  tr = document.createElement("tr");
  td_1 = document.createElement("td");
  td_2 = document.createElement("td");
  td_3 = document.createElement("td");

  td_1.innerHTML += name;
  td_2.appendChild(document.createTextNode(num));
  td_3.appendChild(document.createTextNode(Intl.NumberFormat().format(price)));

  tr.appendChild(td_1);
  tr.appendChild(td_2);
  tr.appendChild(td_3);

  tr.setAttribute("id", "row-" + id);
  page_tbody.appendChild(tr);
}

function insertData(id, num, price) {
  var tr = document.getElementById("row-" + id);
  tr.getElementsByTagName("td")[1].innerHTML = num;
  tr.getElementsByTagName("td")[2].innerHTML = Intl.NumberFormat().format(price);
}

function allPrice() {
  var data,
    shipping_option,
    shipping_cost,
    sum_cost,
    order_text = "",
    allshipping = [],
    allprice = [];

  data = document.querySelectorAll(".sp-product");
  for (var i = 0; i < data.length; i++) {
    var price_product, num_product, sum_product, price_shipping, sun_shipping;
    price_product = data[i].childNodes[1].querySelector(".sp-price").dataset.price;
    num_product = data[i].childNodes[1].querySelector(".amount input").value;

    sum_product = price_product * num_product;
    allprice.push(sum_product);

    price_shipping = data[i].childNodes[1].querySelector(".sp-price").dataset.shipping;
    sun_shipping = price_shipping * num_product;
    allshipping.push(sun_shipping);

    if (num_product > 0) {
      order_text += data[i].childNodes[1].querySelector("h3").innerHTML;
      order_text += " (" + num_product + ") " + Intl.NumberFormat().format(sum_product) + " \n";
    }
  }

  shipping_option = document.querySelector(".shipping-option").value;
  const txt_free = "Free!";
  switch (shipping_option) {
    case "free":
      shipping_cost = 0;
      document.querySelector("#shipping_num").innerHTML = "Free!";
      break;
    case "flat":
      shipping_cost = parseInt(document.querySelector(".flat-cost").value);
      document.querySelector("#shipping_num").innerHTML = shipping_cost;
      break;
    case "flat_free":
      var flat_cost, cost_min;
      flat_cost = parseInt(document.querySelector(".flat-free-cost").value);
      cost_min = parseInt(document.querySelector(".flat-free-min").value);

      if (allprice.reduce(getSum, 0) >= cost_min) {
        shipping_cost = 0;
        document.querySelector("#shipping_num").innerHTML = txt_free;
      } else {
        shipping_cost = flat_cost;
        document.querySelector("#shipping_num").innerHTML = shipping_cost;
      }
      break;
    case "cal":
      var caldata,
        start = 0,
        product = 0,
        free = 0;
      caldata = document.querySelector(".cal-option");

      if (caldata.dataset.start == "true") {
        start = caldata.value;
      }

      if (caldata.dataset.product == "true") {
        product = allshipping.reduce(getSum, 0);
      }

      if (caldata.dataset.free == "true") {
        free = caldata.dataset.min;
        if (allprice.reduce(getSum, 0) >= free) {
          shipping_cost = 0;
          document.querySelector("#shipping_num").innerHTML = txt_free;
        } else {
          shipping_cost = parseInt(start) + parseInt(product);
          document.querySelector("#shipping_num").innerHTML = shipping_cost;
        }
      } else {
        shipping_cost = parseInt(start) + parseInt(product);
        document.querySelector("#shipping_num").innerHTML = shipping_cost;
      }

      break;
    case "none":
      shipping_cost = 0;
      break;
    default:
      break;
  }

  sum_cost = shipping_cost + allprice.reduce(getSum, 0);
  const sum_cost_text = Intl.NumberFormat().format(sum_cost);
  document.querySelector("#total_num").innerHTML = sum_cost_text;

  // Order fields
  order_text += document.querySelector("#shipping_text").innerHTML + " " + shipping_cost + " \n";
  order_text += document.querySelector("#total_text").innerHTML + " " + sum_cost_text;
  document.querySelector(".order_total input").value = sum_cost;
  document.querySelector(".order_summary textarea").value = order_text;
}

function getSum(total, num) {
  return total + Number(num);
}

// AUTO SELECTED
var autoSeleted = (function () {
  var called = false;
  return function () {
    if (!called) {
      called = true;
      var product_num = parseInt(document.getElementById("products-num").dataset.num);
      if (product_num == 1) {
        document.getElementById("p-1").click();
      } else {
        product_num = product_num + 1;
        for (var p = 1; p < product_num; p++) {
          var product = document.getElementById("p-" + p);
          if (product.dataset.selected) {
            product.click();
          }
        }
      }
    }
  };
})();

// CHECK FORM LOADED
const observer = new MutationObserver(function (mutations, me) {
  const forminator = document.querySelector('[id^="forminator-module-"]');
  if (forminator) {
    const upload = document.getElementById("upload-1");
    const bank = document.getElementById("bank");
    if (upload) {
      upload.insertAdjacentElement("afterbegin", bank);
      document.querySelector(".order_summary").parentElement.classList.add("hide");
      document.querySelector(".order_total").parentElement.classList.add("hide");
      document.querySelector(".order_summary textarea").readOnly = true;
      document.querySelector(".order_total input").readOnly = true;
      autoSeleted();
      me.disconnect(); // stop observing
      return;
    }
  }
});
// start observing
observer.observe(document, {
  childList: true,
  subtree: true,
});
