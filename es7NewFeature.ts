export {}
let message = 'Hello world,welcome back';
console.log(message);

let x = 10;
const y  = 20;

let isBeginner: boolean = true;
let total: number  = 0;
let name: string = 'whichwas' ;
let sentence: string = `my name is ${name}
I am a beginner in Typescrpit`;
let isNuew: boolean = null;
let myNmae: string = undefined;
let list1: number[] = [1,2,3];
let list2: Array<number> = [1,2,3];
let person1: [string, number] = ['jeffeway' , 22];

console.log(sentence &&  y.toLocaleString());

enum Color {Red = 5 , Green, Blue};
let c: Color = Color.Green;
console.log(c);

let randomeValue: any = 10;
randomeValue = true;
randomeValue = 'xxx';

function hasName(obj:any): obj is {name: string}{
    return !!obj &&
        typeof obj === "object" &&
        "name" in obj
}


let myVar : unknown = {'name':'aaa', 'age':22};
if (hasName(myVar)){
    console.log(myVar.name);
}
//console.log((myVar as string).toUpperCase());


let a;
a = 10;
a = true;
let multiType: number | boolean;
multiType = 20;
multiType = true;

function add(num1: number, num2: number = 10): number {
    if(num2){
        return num1 + num2;
    }else{
        return num1;
    }
   
}

add(5,10);
add(5);
let testvar: unknown;
testvar = '10';
console.log(add(5,(testvar as number)));

interface Person{
    firstName: string;
    lastName?: string;
}

function fullName(person: Person){
    console.log(`${person.firstName} ${person.lastName}`);
}

let p = {
    firstName: 'brue',
    lastName: 'wayhine'
};
console.log(fullName(p));
console.log("hie");

class Employee {
    employeeName: string;

    constructor(name: string){
        this.employeeName = name;
    }

    greet(){
        console.log(`Good morning ${this.employeeName}`);
    }

}

let emp1 = new Employee('vis');
console.log(emp1.employeeName);
emp1.greet();


class Manager extends Employee{
     constructor(managerName: string){
        super(managerName);
     }

     delegateWork(){
         console.log(`Manager delegates`);
     }
}

let m1 = new Manager('Brue1');
m1.delegateWork();