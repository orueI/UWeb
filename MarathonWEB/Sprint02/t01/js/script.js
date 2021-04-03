var num = Number(1)
var bitInt = BigInt(1)
var s = String("s")
var f = Boolean(false)
var nul = null
var undefined
var o = {}
var symbol = Symbol("id")
var fun = Function()
var variables = ""
variables += num + " is " + typeof num + "\n"
variables += bitInt + " is " + typeof bitInt + "\n"
variables += s + " is " + typeof s + "\n"
variables += f + " is " + typeof f + "\n"
variables += nul + " is " + typeof nul + "\n"
variables += undefined + " is " + typeof undefined + "\n"
variables += o + " is " + typeof o + "\n"
variables += symbol.toString() + " is " + typeof symbol + "\n"
variables += fun + " is " + typeof fun + "\n"

alert(variables)