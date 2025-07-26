<?php
class Car{
    public $model;
    public $year;

    public function drive(){
        return 'driving';
    }

    public function setModel($model){
        $this->model=$model;
    }

}

$bmw= new Car();

$bmw->model='BMW';
echo $bmw->model;


$bmw->setModel('BMW-322');
 echo $bmw->model;

 //Constructor

 class car2{
    public $name;
    public $year;

    public function __construct($name,$year){
        $this->name=$name;
        $this->year=$year;
    }

    public function a(){
        return 'salom';
    }
 }

 $audi= new car2('audi',2020);//constructor, ichiga qiymat yozmasa ishlamaydi chunki constructor ishlatilgan classda
 echo $audi->a();

 $chevy= new car2('chevralet',2023);
 echo $chevy->name;


 //Inharitence-merosxo'rlik

 class electricCar extends Car { // car dan meros oldi, car class da bor narsa bunda bor
    public $battary;

    public function charge(){
        return 'charging';
    }

    public function drive(){
        return 'electric driving';// overrid method- car clasidagi drive methodi overrid qilindi
    }
 }

 $tesla=new electricCar('tesla',2024); 
 $tesla->battary=5000;

 // final -  classdan boshqa meros olib bolmaslik uchun yoki methodni overrid qila olmaslik uchun ishlatiladi



 //Acces modifies - public protected private

 // private - faqat shu class ichida ishlaydi, obyektda ham bola classda ham ishlamaydi
 //protected - obyektda ishlamaydi bola classda ishlaydi (funksiya va o'zgaruvchilar uchun bir xil)

class father{
    private $name;
    protected $surname;
    public $addres;
     public function __construct($name,$surname,$addres){
        $this->name=$name;
        $this->surname=$surname;
        $this->addres=$addres;
    } 
    public function getName(){ // private bolgani uchun name chiqmaydi, uni chiqarish uchun public tarzda funksiya yozish kerak , asosiy clas ichida yozish kerak 
        return $this->name;
    }

    
   

}

class son extends father{
    public function getSurname(){//protected bolgani uchun uni olish uchun public funksiya yozish kerak, uni bola class da ham yozsa boladi
        return $this->surname;
    }
}



$child= new son('someone','somebody','somewhere');

echo $child->getName();
echo $child->getSurname() . "<br>";


//Abstrack -  abstrack class dan obyekt yaratib bo'lmaydi, faqat meros olsa bo'lsa bo'ladi va meros olingan classd an obyekt olsa boladi

abstract class one{
    abstract public function need();
}

abstract class two extends one{
    
    abstract public function need();

    
}
//abstrack class ichida bitta kamida abstract method boladi shunda u abstract boladi va meros olgan bola class ichida ham shu method bolishi kerak




//Interfaces
interface Animal{
    public function makeSound();

}
//interface ni ishlatish uchu implements kalit sozi ishlatiladi
class dog implements Animal{
    public function makeSound(){
        echo "dog"; 
    }
}


//Trait - trait ga funksiya yozib uni bir nechta class ichida chaqirsak boladi.
trait Animaltrait{
    public function walk(){
        return "walking";
    }
}

class Cat{
    use Animaltrait;
}

$cat=new Cat();
echo $cat->walk(). "<br>";


//Static methods and property


class It{
    public $ism="it";
    public static function bark(){
        return "barking";
    }
    public function check(){
        return "true";
    }
    public  function ism(){
        return $this->ism;
    }
}

echo It::bark(). "<br>";
$it=new It();
echo $it->ism();
