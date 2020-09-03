[09:16, 9/3/2020] fema wk: <?php
class siswa{
    //ini property
    public $nama,
            $nis,
            $rombel;
    //ini constructor
    public function __construct($nama, $nis, $rombel = "RPL XI-2"){
        $this->nama = $nama;
        $this->nis = $nis;
        $this->rombel = $rombel;
    }
    //ini method
    public function menghasilkan()
    {
        return " Nama : $this->nama | NIS : $this->nis | Rombel : $this->rombel";
    }
}

class ambilInfo{
    public function mencetak(siswa $siswa){
        $str = " <h3> Data {$siswa->nama} </h3> <h4> {$siswa->menghasilkan()} </h4>";
        return $str;
    }
}

//ini object
//mengisi parameter constructor
$siswa1 = new siswa("Fema Flamelina Putri", 11907154);
$siswa2 = new siswa("M. Abdurrasyid", 11907335);
$siswa3 = new siswa("M. Geovalza V.", 11907305);
$ambilInfo = new ambilInfo();

//menampilkan object type
echo $ambilInfo->mencetak($siswa1);
echo "<br>";
echo $ambilInfo->mencetak($siswa2);
echo "<br>";
echo $ambilInfo->mencetak($siswa3);

?>