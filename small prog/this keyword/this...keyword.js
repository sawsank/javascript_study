 /* function first(){
    return this;
}
 */
/*  console.log(first() === global);
 */ //this is Node's global object
 //because thats where the
 //first method was called

/* function second() {
    'use strict';
    return this;
}

console.log(second() === global);
console.log(second() === undefined); */ 

/*  let myObject = { value: 'My Object'};

//value is set on the global object
globalThis.value = 'Global object';

function third() {
    return this.value ;
}

console.log(third());

console.log(third.call(myObject));
console.log(third.apply(myObject, ['bob'])); */

function fifth() {
    document.write(this.firstName + ' ' + this.lastName);
}

let custumen1 = {
    firstName: 'bob',
    lastName: 'tabor',
    print: fifth
}
let custumen2 = {
    firstName: 'richard',
    lastName: 'boughton',
    print: fifth
}

custumen1.print();
custumen2.print();