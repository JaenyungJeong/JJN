/* 
* Class Keyword
 - 클래스(어떤 데이타가 들어가는지 정의되는 장소)는 객체지향 프로그래밍에서 특정 객체(인스턴스)를 생성하기 위한 변수와 메소드(함수)를 정의하는 일종의 틀이다.
정보를 일반화해서 정리하는 방법
*/

/* class IdolModel { 
    // 클래스명 이니셜 대문자
    name = '안유진';
    year = 2003;
} */

class IdolModel { 
    // 클래스명 이니셜 대문자
    name;
    year;

    constructor(name, year){
        this.name = name;
        this.year = year;
    }

    sayName (){
        return `안녕하세요 저는 ${this.name}입니다.`;
    } 
}

// constructor - 생성자

const yuJin = new IdolModel('안유진', 2003);
console.log(yuJin);

const gaeul = new IdolModel('가을', 2002);
console.log(gaeul);

const ray = new IdolModel('레이', 2004);
console.log(ray);

const wonYoung = new IdolModel('장원영', 2004);
console.log(ray);

console.log(yuJin.name);
console.log(yuJin.year);
console.log(wonYoung.name);

console.log(yuJin.sayName());
console.log(wonYoung.sayName());

console.log(typeof IdolModel);
console.log(typeof yuJin);
