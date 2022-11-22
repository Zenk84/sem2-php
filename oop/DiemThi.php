<?php

namespace K48\PHP;

require_once 'HocVien.php';

use K48\SEM2\{HocVienMoi, HocVienTre};

class DiemThi
{
    // public
    // protected
    // private
    protected $hocVien;
    private $diem = 8;
    protected $monThi = 'PHP';
    var $diemMon;

    function __construct(string $name, string $gender)
    {
        $this->hocVien = new HocVienMoi;
        $this->hocVien->setName($name);
        $this->hocVien->setGender($gender);
    }

    public function showName() {
        return $this->hocVien->getName();
    }

    public function showGender() {
        return $this->hocVien->getGender();
    }
}

class DiemHocKy extends DiemThi
{
    public static $hocKy = 'HKII';
    public $cuoiKy = 'CuoiKy';
    const CUOI_KY = 'Ket Thuc Mon';

    function __construct(string $name, string $gender)
    {
        parent::__construct($name, $gender);
    }

    function showDetail() {
        echo 'Name is: ' . $this->hocVien->getName(), PHP_EOL;
        echo 'Gender is: ' . $this->hocVien->getGender(), PHP_EOL;
    }

    /*function setDiem(int $diem) {
        $this->diem = $diem;
    }*/
    function getDiem() {
        return $this->diem;
    }
    function getMon() {
        return $this->monThi;
    }

    public static function getType() {
        echo "Ly thuyet & Thuc hanh", PHP_EOL;
    }

    public function showName() {
        echo DiemHocKy::CUOI_KY;
        echo static::CUOI_KY;
        return $this->hocVien->getName() .'-'. $this->hocVien->getGender();
    }
}

/*$thi = new DiemThi('Tuan', 'Nam');
echo "Ten: {$thi->showName()}, Gioi tinh: {$thi->showGender()}";*/
DiemHocKy::getType();
echo DiemHocKy::$hocKy, PHP_EOL;
echo DiemHocKy::CUOI_KY, PHP_EOL;

$diem = new DiemHocKy('Dang', 'Nam');
$diem->showDetail();
//$diem->setDiem(10);
echo $diem->getMon();
echo $diem->cuoiKy, PHP_EOL;
