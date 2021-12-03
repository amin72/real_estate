function split(value) {
  value = value.split(',').join("")
  var i = value.length - 1
  var j = 1
  var r = ''

  while (i >= 0) {
    r += value[i]
    if (j % 3 === 0 && j < value.length) {
        r += ','
    }
    i -= 1
    j += 1
  }

  r = r.split("").reverse().join("")
  return r
}

// format price digits; add , to price digits
function formatInputPrice(input) {
  r = split(input.value)
  input.value = r
}

function formatElementPrice(element) {
  r = split(element.value)
  element.text(r) 
}

// remove , from price digits
function unFormatPrice() {
  // price
  var value = price.value
  var newValue = value.replace( /\,/g, "");
  price.value = newValue

  // price_monthly
  var value = price_monthly.value
  var newValue = value.replace( /\,/g, "");
  price_monthly.value = newValue
}

//
function change() {
  unFormatPrice()

  // change phone numbers
  var value = phone.value
  phone.value = value.replace(/۰/g, '0').replace(/۱/g, '1').replace(/۲/g, '2').replace(/۳/g, '3').replace(/۴/g, '4').replace(/۵/g, '5').replace(/۶/g, '6').replace(/۷/g, '7').replace(/۸/g, '8').replace(/۹/g, '9')

  // change bedrooms numbers
  var value = bedrooms.value
  bedrooms.value = value.replace(/۰/g, '0').replace(/۱/g, '1').replace(/۲/g, '2').replace(/۳/g, '3').replace(/۴/g, '4').replace(/۵/g, '5').replace(/۶/g, '6').replace(/۷/g, '7').replace(/۸/g, '8').replace(/۹/g, '9')

  // change zipcode numbers
  var value = zipcode.value
  zipcode.value = value.replace(/۰/g, '0').replace(/۱/g, '1').replace(/۲/g, '2').replace(/۳/g, '3').replace(/۴/g, '4').replace(/۵/g, '5').replace(/۶/g, '6').replace(/۷/g, '7').replace(/۸/g, '8').replace(/۹/g, '9')

  // change price numbers
  var value = price.value
  price.value = value.replace(/۰/g, '0').replace(/۱/g, '1').replace(/۲/g, '2').replace(/۳/g, '3').replace(/۴/g, '4').replace(/۵/g, '5').replace(/۶/g, '6').replace(/۷/g, '7').replace(/۸/g, '8').replace(/۹/g, '9')

  // change price_monthly numbers
  var value = price_monthly.value
  price_monthly.value = value.replace(/۰/g, '0').replace(/۱/g, '1').replace(/۲/g, '2').replace(/۳/g, '3').replace(/۴/g, '4').replace(/۵/g, '5').replace(/۶/g, '6').replace(/۷/g, '7').replace(/۸/g, '8').replace(/۹/g, '9')

  // change area numbers
  var value = area.value
  area.value = value.replace(/۰/g, '0').replace(/۱/g, '1').replace(/۲/g, '2').replace(/۳/g, '3').replace(/۴/g, '4').replace(/۵/g, '5').replace(/۶/g, '6').replace(/۷/g, '7').replace(/۸/g, '8').replace(/۹/g, '9')
}