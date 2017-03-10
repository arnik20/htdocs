<?php
Class Controller_Pages extends Controller_Abstract
{
    public function error($param)
    {
        $View = $this->loadView('error');
        $View->view('Pages/empty');
        $View->set('text', $param);
        $View->render("404");
    }
    public function index()
    {
        $View = $this->loadView('index');// _layout
        $View->view('Pages/index'); // Pages
        $View->render("Главная"); // title
    }
    public function articles()
    {
        $View = $this->loadView('index');
        $View->view('Pages/articles'); // Pages
        $View->render("Статьи"); // title
    }
	
	public function registr()
    {
        $View = $this->loadView('index');
        $View->view('Pages/registr'); // Pages
        $View->render("регистрация"); // title
    }
	
	public function login()
    {
        $View = $this->loadView('index');
        $View->view('Pages/login'); // Pages
        $View->render("Вход"); // title
    }
	
	public function personal()
    {
        $View = $this->loadView('index');
        $View->view('Pages/zashita/personal'); // Pages
        $View->render("Персональный компьютер"); // title
    }
	
	public function planshet()
    {
        $View = $this->loadView('index');
        $View->view('Pages/zashita/planshet'); // Pages
        $View->render("Защита персональных данных"); // title
    }
	
	public function mobale()
    {
        $View = $this->loadView('index');
        $View->view('Pages/zashita/mobale'); // Pages
        $View->render("Смартфоны"); // title
    }
	
	public function Unix()
    {
        $View = $this->loadView('index');
        $View->view('Pages/Inform security/Unix'); // Pages
        $View->render("Unix"); // title
    }
	
	public function shifr()
    {
        $View = $this->loadView('index');
        $View->view('Pages/Inform security/shifr'); // Pages
        $View->render("Шифр Цезаря"); // title
    }
	
	public function atbah()
    {
        $View = $this->loadView('index');
        $View->view('Pages/Inform security/atbah'); // Pages
        $View->render("Шифр Атбаш"); // title
    }
	
	public function xolodnie_zvonki()
    {
        $View = $this->loadView('index');
        $View->view('Pages/nwes inform/xolodnie_zvonki'); // Pages
        $View->render("Холодные звонки"); // title
    }
	
	public function sistema()
    {
        $View = $this->loadView('index');
        $View->view('Pages/nwes inform/sistema'); // Pages
        $View->render("Система инженерной безопасности"); // title
    }
	
	public function birza()
    {
        $View = $this->loadView('index');
        $View->view('Pages/nwes inform/birza'); // Pages
        $View->render("Хакеры атаковали биржу"); // title
    }
}