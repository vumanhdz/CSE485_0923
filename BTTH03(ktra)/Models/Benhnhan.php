<?php
class Benhnhan{
    //Properties
    private $bn_id;
    private $tenBenhNhan;
    private $ngayKham;
    private $trieuchung;
    private $bs_id;

    public function __construct($bn_id, $tenBenhNhan, $ngayKham, $trieuchung, $bs_id) {
        $this->bn_id = $bn_id;
        $this->tenBenhNhan = $tenBenhNhan;
        $this->ngayKham = $ngayKham;
        $this->trieuchung = $trieuchung;
        $this->bs_id = $bs_id;
    }
    public function getBnId() {
        return $this->bn_id;
    }

    public function getTenBenhNhan() {
        return $this->tenBenhNhan;
    }

    public function getNgayKham() {
        return $this->ngayKham;
    }

    public function getTrieuChung() {
        return $this->trieuchung;
    }

    public function getBsId() {
        return $this->bs_id;
    }

    // Setter methods
    public function setBnId($bn_id) {
        $this->bn_id = $bn_id;
    }

    public function setTenBenhNhan($tenBenhNhan) {
        $this->tenBenhNhan = $tenBenhNhan;
    }

    public function setNgayKham($ngayKham) {
        $this->ngayKham = $ngayKham;
    }

    public function setTrieuChung($trieuchung) {
        $this->trieuchung = $trieuchung;
    }

    public function setBsId($bs_id) {
        $this->bs_id = $bs_id;
    }
}
