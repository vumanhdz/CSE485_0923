<?php
class Bacsi {
    // Properties
    private $bs_id;
    private $tenBacSi;
    private $chuyenKhoa;

    // Constructor...
    public function __construct($bs_id, $tenBacSi, $chuyenKhoa) {
        $this->bs_id = $bs_id;
        $this->tenBacSi = $tenBacSi;
        $this->chuyenKhoa = $chuyenKhoa;
    }

    // Getter methods
    public function getBsId() {
        return $this->bs_id;
    }

    public function getTenBac() {
        return $this->tenBacSi;
    }

    public function getChuyenKhoa() {
        return $this->chuyenKhoa;
    }

    // Setter methods
    public function setId($bs_id) {
        $this->bs_id = $bs_id;
    }

    public function setTenBac($tenBacSi) {
        $this->tenBacSi = $tenBacSi;
    }

    public function setChuyenKhoa($chuyenKhoa) {
        $this->chuyenKhoa = $chuyenKhoa;
    }
}