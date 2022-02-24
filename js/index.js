let word1 = 'Petar';
let word2 = 'Zavisic';
let num1 = 2;
let num2 = 3;

// const fullName = word1 + ' ' + word2;
// const fullName = `${num1 + num2} ${word2}`;
// console.log(fullName);

// let example = 'Hello \n' + 'world';
let example = `${word1}
${word2}`;
console.log(example);
document.getElementById('example').innerText = example;


// DESTRUCTING OBJECTS

const personalInformation = {
    firstName: 'Petar',
    lastName: 'Zavisic',
    city: 'Subotica',
    state: 'Srbija',
    zipCode: 24000
}

const {firstName: fn, lastName: ln} = personalInformation;
console.log(`${fn} ${ln}`);

// DESTRUCTING ARRAYS

let names = ['Petar', 'Uros', 'Milos', 'Nikola'];
let [firstName, middleName, lastName] = ['Petar', 'Uros', 'Milos', 'Nikola'];

// moze se overidovati
lastName = 'Clements';
console.log(firstName + middleName + lastName);


// OBJECT LITERAL

function addressMaker1(city, state){
    const newAddress = {city: city, state: state};
    console.log(newAddress);
}

addressMaker1('Subotica', 'Srbija')


// OBJECT LITERAL (CHALLENGE)

function addressMaker(address){
    const{city, state} = address;


    const newAddress = {
        city,
        state,
        country: 'united States'
    };
    console.log(`${newAddress.city}, ${newAddress.state}, ${newAddress.country}`);
}

addressMaker({city: 'Austin', state: 'Texas'})


// FOR OF LOOP = slicno foreach

let incomes1 = [62000, 67000, 75000];
let total = 0;

for(const income of incomes1){
    total += income;
}

let fullName = "Dylan Coding God Israel";

for(const char of fullName){
    console.log(char);
}

console.log(total);

// FOR OF LOOP ( CHALLENGE )

let incomes = [62000, 67000, 75000];
for(let income of incomes){
    income += 5000;
}
console.log(incomes);


// SPREAD OPERATOR

let example11 = [1,2,3,4,5,6];
let example22 = [...example11];
example22.push(true);
console.log(example22);

let example1 = {
    firstName: 'Dylan'
};

// let example2 = {
// firstName: 'N/A'
//     ...example1
// }
//
// example2 = {firstName: 'Dylan'};

// REST OPERATOR

function add1(...nums){

    console.log(nums);
}

add1(4, 6, 7, 8, 12);


// ARROW FUNCTION

function add(...nums){

    let total = nums.reduce((x, y) => x+y);
    console.log(total);
}

add(4,5,7,8,12);

// DEFAULT PARAMS

function add3(numArray = []) {
    let total = 0;
    numArray.forEach((element) =>{
        total += element;
    })
    console.log(total);
}

add3();

// INCLUDES

let numArray = [1,2,3,4,5];

console.log(numArray.includes(2));


// LET & CONST

const exampleNew = {}; // const ne moze da se overiduje
exampleNew.firstName = 'Petar';
console.log(exampleNew);


// EXPORT & IMPORT

import { data } from './example.js'
let updatedData = data;
data.push(5);
console.log(updatedData);


// padStart() & padEnd()

let example33 = 'Petar Zavisic';
console.log(example33.padStart(10,'a'));
console.log(example33.padEnd(10,'a'));

//Ukoliko nemamo dovoljnu duzinu program popunjava sa pocetka ili sa kraja odredjenim karakterima
//zadali smo duzinu 10 ako nije toliko dugacko onda ce u zavisnosti od funkcije dodati karakter a

// padStart() & padEnd() ( CHALLENGE)

let exampleYoutube = 'YouTube.com/CodingTutorials360';
console.log(exampleYoutube.padStart(100)); // dodaje prazna mesta na pocetak
console.log(exampleYoutube.padEnd(1)); // nece se nista desiti jer je string duzi pa ce ga ignorisati

// Classes

import { Animal, Cat } from "./animal.js";
let cat = new Cat('Cat', 4);
cat.makeNoise();
// cat.legs = 3;
// console.log(cat.type);
// console.log(cat.legs);
// cat.makeNoise(); // Loud noise
// cat.makeNoise('Meow'); // Meow
// console.log(Animal.return10());
console.log(cat.metaData);

// TRAILING COMMAS

function add55(param1,){
    const example55 = {
        name: 'Dylan',
    };

    console.log(example55);
}

add(5);

// ASYNC & AWAIT

// const apiUrl = 'https://fcctop100.herokuapp.com/api/fccusers/top/alltime';
//
// async function getTop100Campers(){
//     const response = await fetch(apiUrl);
//     const json = await response.json();
//
//     console.log(json[0]);
// }
// getTop100Campers().then(r => r.json());

// function getTop100Campers(){
//     fetch(apiUrl)
//         .then((r) => r.json())
//         .then((json) => {
//             console.log(json[0])
//         }).catch((error) => {
//             console.log('Failed');
//     });
// }

// ASYNC & AWAIT ( CHALLENGE )

// function resolveAfter3Seconds(){
//     return new Promise(resolve => {
//         setTimeout(() => {
//             resolve('resolved');
//         }, 3000);
//     });
// }
//
// resolveAfter3Seconds().then((data) => {
//     console.log(data);
// })
//
// async function getAsyncData(){
//     const result = await resolveAfter3Seconds();
//     console.log(result);
// }
//
// getAsyncData()

// SETS

const exampleSet = new Set([1,1,1,1,2,2,2,2,3,3,3,3]);
exampleSet.add(5);
exampleSet.add(5).add(17);
console.log(exampleSet.has(5));
console.log(exampleSet.delete(5));
exampleSet.clear(); //brise ceo set
console.log(exampleSet.size); // brise duplikate
