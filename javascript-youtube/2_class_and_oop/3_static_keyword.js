/* 
    Static Keyword
*/

class IdolModel{
    name;
    year;
    static groupName = '아이브';

    constructor(name, year){
        this.name = name;
        this.year = year;

    }
}

const yuJin = new IdolModel('안유진', 2003);
console.log(yuJin);

console.log(IdolModel.groupName);