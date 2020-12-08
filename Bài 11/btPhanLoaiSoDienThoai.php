<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Title</title>
</head>

<body>
  <form method="get">
    <h3>PHÂN LOẠI SỐ ĐIỆN THOẠI</h3>
    <textarea rows="5" cols="50" name="sodienthoai"> </textarea>
    <input type="submit" value="Nhập">
  </form>
  <?php
  const DAU_SO_VIETTEL = "086,096,097,098,032,033,034,035,036,037,038,039";
  const DAU_SO_MOBIFONE = "090,093,089,070,079,076,077,078";
  const DAU_SO_VINAPHONE = "088,091,094,083,084,085,081,082";
  const DAU_SO_VNM = "092,056,058";

  const MA_VIETTEL = "VIETTEL";
  const MA_MOBIFONE = "MOBIFONE";
  const MA_VINAPHONE = "VINAPHONE";
  const MA_VNM = "VIETNAMMOBILE";

  // Danh sách đầu số của nhà mạng
  // return [ MA_NHA_MANG => DANH_SACH_DAU_SO ]
  function layDanhSachDauSo() {
    return [
      MA_VIETTEL => chuyenChuoiDauSoThanhDanhSach(DAU_SO_VIETTEL),
      MA_MOBIFONE => chuyenChuoiDauSoThanhDanhSach(DAU_SO_MOBIFONE),
      MA_VINAPHONE => chuyenChuoiDauSoThanhDanhSach(DAU_SO_VINAPHONE),
      MA_VNM => chuyenChuoiDauSoThanhDanhSach(DAU_SO_VNM)
    ];
  }

  function chuyenChuoiDauSoThanhDanhSach($chuoiDauSo) {
    return explode(',', $chuoiDauSo);
  }

  // Trả về mã nhà mạng
  function layMaNhaMang($soDienThoai) {
    // Lấy 3 số đầu của điện thoại
    $baSoDau = lay3SoDau($soDienThoai);
    // Kiểm ra số điện thoại thuộc mã nhà mạng nào
    $danhSachDauSoNhaMang = layDanhSachDauSo();
   
    foreach($danhSachDauSoNhaMang as $maNhaMang => $danhSachDauSo) {
      if(in_array($baSoDau, $danhSachDauSo)) {
        return $maNhaMang;
      }
    }
  }

  // cắt chuỗi
  function lay3SoDau($soDienThoai) {
    return substr($soDienThoai, 0, 3);
  }

  // Trả về dạng HTML, tham số là 1 mảng 2 chiều
  function inDanhSachPhanLoai($danhSachSoDienThoai) {
    $noiDung = "<table>";

    foreach($danhSachSoDienThoai as $maNhaMang => $danhSachSoDienThoai) {
      $noiDung .= "<tr><th>$maNhaMang</th></tr>";

      foreach($danhSachSoDienThoai as $soDienThoai) {
        $noiDung .= "<tr><td>$soDienThoai</th></td>";
      }
    }
    
    $noiDung .= "</table>";

    return $noiDung;
  }

  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $soDienThoai = $_GET['sodienthoai'];

    $danhSachSoDienThoai = explode(',', $soDienThoai);

    $danhSachPhanLoaiSdt = [];

    $danhSachDauSoNhaMang = layDanhSachDauSo();

    foreach($danhSachDauSoNhaMang as $maNhaMang => $danhSachDauSo) {
      $danhSachPhanLoaiSdt[$maNhaMang] = [];
    }

    foreach($danhSachSoDienThoai as $soDienThoai) {
      $maNhaMang = layMaNhaMang($soDienThoai);
      $danhSachPhanLoaiSdt[$maNhaMang][] = $soDienThoai;
    }

    echo inDanhSachPhanLoai($danhSachPhanLoaiSdt);
  }


  ?>
</body>

</html>