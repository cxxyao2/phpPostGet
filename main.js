"use strict";
var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
exports.__esModule = true;
var message = 'Hello world,welcome back';
console.log(message);
var x = 10;
var y = 20;
var isBeginner = true;
var total = 0;
var name = 'whichwas';
var sentence = "my name is " + name + "\nI am a beginner in Typescrpit";
var isNuew = null;
var myNmae = undefined;
var list1 = [1, 2, 3];
var list2 = [1, 2, 3];
var person1 = ['jeffeway', 22];
console.log(sentence && y.toLocaleString());
var Color;
(function (Color) {
    Color[Color["Red"] = 5] = "Red";
    Color[Color["Green"] = 6] = "Green";
    Color[Color["Blue"] = 7] = "Blue";
})(Color || (Color = {}));
;
var c = Color.Green;
console.log(c);
var randomeValue = 10;
randomeValue = true;
randomeValue = 'xxx';
function hasName(obj) {
    return !!obj &&
        typeof obj === "object" &&
        "name" in obj;
}
var myVar = { 'name': 'aaa', 'age': 22 };
if (hasName(myVar)) {
    console.log(myVar.name);
}
//console.log((myVar as string).toUpperCase());
var a;
a = 10;
a = true;
var multiType;
multiType = 20;
multiType = true;
function add(num1, num2) {
    if (num2 === void 0) { num2 = 10; }
    if (num2) {
        return num1 + num2;
    }
    else {
        return num1;
    }
}
add(5, 10);
add(5);
var testvar;
testvar = '10';
console.log(add(5, testvar));
function fullName(person) {
    console.log(person.firstName + " " + person.lastName);
}
var p = {
    firstName: 'brue',
    lastName: 'wayhine'
};
console.log(fullName(p));
console.log("hie");
var Employee = /** @class */ (function () {
    function Employee(name) {
        this.employeeName = name;
    }
    Employee.prototype.greet = function () {
        console.log("Good morning " + this.employeeName);
    };
    return Employee;
}());
var emp1 = new Employee('vis');
console.log(emp1.employeeName);
emp1.greet();
var Manager = /** @class */ (function (_super) {
    __extends(Manager, _super);
    function Manager(managerName) {
        return _super.call(this, managerName) || this;
    }
    Manager.prototype.delegateWork = function () {
        console.log("Manager delegates");
    };
    return Manager;
}(Employee));
var m1 = new Manager('Brue1');
m1.delegateWork();
