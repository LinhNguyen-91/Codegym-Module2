<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-7">
            <h1>THÊM GHI CHÚ</h1>
            </br>
            <form action="./index.php?action=them_khach_hang" method='post'>
                <table>
                    <tr>
                        <th>Tiêu đề :</th>
                        <td style="text-align: center"> <input type="text" name="tieude" class="form-control"></td>
                        
                    </tr>
                    <tr>
                        <th>Nội dung :</th>
                        <td><textarea rows="6" cols="50" name="noidung" class="form-control"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <select name="phanloai" class="btn btn-info dropdown-toggle">
                                <option value="1">Cá Nhân</option>
                                <option value="2">Công ty</option>
                            </select>

                        
                         <input type="submit" value="Thêm" class="btn btn-primary">
                            <a href="index.php?action=danh_sach"><button type="button" class="btn btn-primary">Hủy</button></a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>