<?php
class Display
{
    public function Display()
    {
    }
}

class Category
{
    private $id;
    private $name;
    private $des;
    function __construct($id, $name, $des)
    {
        $this->id = $id;
        $this->name = $name;
        $this->des = $des;
    }
    function get_id()
    {
        return $this->id;
    }

    function get_name()
    {
        return $this->name;
    }

    function get_des()
    {
        return $this->des;
    }

    function Display()
    {
        return $this->get_id() . " " . $this->get_name() . " " . $this->get_des();
    }
}
class Book extends Display
{
    protected $isbn, $title, $pub, $year, $price;
    function __construct($isbn, $title, $pub, $price, $year)
    {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->pub = $pub;
        $this->price = $price;
        $this->year = $year;
    }
    function get_isbn()
    {
        return $this->isbn;
    }

    function get_title()
    {
        return $this->title;
    }
    function get_year()
    {
        return $this->year;
    }
    function get_pub()
    {
        return $this->pub;
    }
    function get_quan()
    {
        return $this->price;
    }

    function Display()
    {
        return $this->get_isbn() . " " . $this->get_title() . " " . $this->get_year() . " " . $this->get_pub() . " " . $this->get_quan();
    }
}
class LibruaryBook extends Book
{
    private $id_lib_book, $situation, $day_in, $quantity;
    function __construct($id_lib_book, $situation, $day_in, $quantity, $isbn, $title, $pub, $year, $price)
    {
        $this->id_lib_book = $id_lib_book;
        $this->situation = $situation;
        $this->day_in = $day_in;
        $this->quantity = $quantity;
        $this->isbn = $isbn;
        $this->year = $year;
        $this->title = $title;
        $this->pub = $pub;
        $this->price = $price;
    }
    function get_id_lib_book()
    {
        return $this->id_lib_book;
    }

    function get_situation()
    {
        return $this->situation;
    }

    function get_day_in()
    {
        return $this->day_in;
    }
    function get_quan()
    {
        return $this->quantity;
    }
}
class Loan extends LibruaryBook
{
    private $id_loan, $date, $num;
    function __construct($id_loan, $date, $num)
    {
        $this->id_loan = $id_loan;
        $this->date = $date;
        $this->num = $num;
    }
    function getIdLoan()
    {
        return $this->id_loan;
    }

    function getDate()
    {
        return $this->date;
    }

    function getNum()
    {
        return $this->num;
    }
}
class Libruary extends LibruaryBook
{
    private $id_lib, $adress;
    function __construct($id_lib, $adress)
    {
        $this->id_lib = $id_lib;
        $this->adress = $adress;
    }
    function getIdLib()
    {
        return $this->id_lib;
    }

    function getDate()
    {
        return $this->adress;
    }
}
