<?php
include_once FODER_CHUA . '/model/lop_ket_noi.php';
include_once FODER_CHUA . '/model/lop_note.php';

class DataBase
{
    public $ketNoi;
    public function __construct()
    {
        $this->ketNoi = new KetNoi();
    }

    public function sumNoteUser($user)
    {
        $sql = "SELECT 
                note.titele,
                note.content,
                note.id ,                
                note_type.name_note  as 'type_id',
                dang_nhap.gmail
                 FROM note 
                 JOIN note_type 
                 ON note.type_id = note_type.id
                JOIN dang_nhap
                ON note.user_id = dang_nhap.id
                 WHERE dang_nhap.gmail ='$user'";

        $resutls = mysqli_query($this->ketNoi->ketNoi(), $sql);
        $items = [];
        while ($row = mysqli_fetch_assoc($resutls)) {
            $items[] = $row;
        }
        return count($items);
    }

    public function getID($id)
    {
        $sql = "SELECT * FROM  note WHERE id= '$id'";
        $resutl = mysqli_query($this->ketNoi->ketNoi(), $sql);
        return mysqli_fetch_assoc($resutl);
    }

    public function create($user, $ghiChu)
    {
        $tieuDe = $ghiChu->tieude;
        $noiDung = $ghiChu->noidung;
        $phanLoai = $ghiChu->phanloai;
        $id = $this->getUser($user);
        $sql = "INSERT INTO  note (titele,content,type_id,user_id) VALUE ('$tieuDe','$noiDung','$phanLoai','$id')";
        return mysqli_query($this->ketNoi->ketNoi(), $sql);
    }

    public function update($ghiChu, $id)
    {
        $tieuDe = $ghiChu->tieude;
        $noiDung = $ghiChu->noidung;
        $phanLoai = $ghiChu->phanloai;

        $sql = "UPDATE note SET titele='$tieuDe',content = '$noiDung',type_id = '$phanLoai' WHERE id = '$id'";
        return mysqli_query($this->ketNoi->ketNoi(), $sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM note WHERE id = '$id'";
        return mysqli_query($this->ketNoi->ketNoi(), $sql);
    }

    public function search($user, $thongTin, $phanLoai, $batDau, $ketThuc)
    {
        $sql = "SELECT 
               note.id,
               note.titele,
               note.content,
               note_type.name_note  as 'type_id',
               dang_nhap.gmail
               FROM note 
               JOIN note_type 
               ON note.type_id = note_type.id 
               JOIN dang_nhap 
               ON note.user_id = dang_nhap.id
               WHERE note.titele LIKE '%$thongTin%' AND note.type_id ='$phanLoai' AND dang_nhap.gmail ='$user'
               LIMIT $batDau,$ketThuc";

        $resutls = mysqli_query($this->ketNoi->ketNoi(), $sql);
        $items = [];
        while ($row = mysqli_fetch_assoc($resutls)) {
            $items[] = $row;
        }
        return $items;
    }

    public  function tongNoteXoa($idUser)
    {
        $sql = "SELECT count(id) as total from note_xoa WHERE user_id = $idUser";
        $result = mysqli_query($this->ketNoi->ketNoi(), $sql);
        $row = mysqli_fetch_assoc($result);
        return $row['total'];
    }
    public  function tongNoteTim($user, $thongTin, $phanLoai)
    {
        $id = +$this->getUser($user);
        $sql = "SELECT count(id) as total FROM note
                WHERE titele LIKE '%$thongTin%' AND type_id ='$phanLoai' AND user_id='$id'";

        $result = mysqli_query($this->ketNoi->ketNoi(), $sql);
        $row = mysqli_fetch_assoc($result);
        return $row['total'];
    }

    public function noteTrang($user, $batDau, $ketThuc)
    {               
        $sql = "SELECT 
               note.id ,
               note.titele,
               note.content,
               note_type.name_note  as 'type_id',
               dang_nhap.gmail 
                FROM note 
                JOIN note_type 
                ON note.type_id = note_type.id
               JOIN dang_nhap
               ON note.user_id = dang_nhap.id
                WHERE dang_nhap.gmail  = '$user'
               LIMIT $batDau,$ketThuc";
        
        $result = mysqli_query($this->ketNoi->ketNoi(), $sql);
        $items = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $items[] = $row;
        }
        return $items;
    }

    public function getUser($user)
    {
        $sql = "SELECT * FROM  dang_nhap WHERE gmail = '$user'";
        $resutl = mysqli_query($this->ketNoi->ketNoi(), $sql);
        $ketQua = mysqli_fetch_assoc($resutl);
        return $ketQua['id'];
    }

    public function createId($id, $ghiChu)
    {
        $idNote = $ghiChu['id'];
        $tieuDe = $ghiChu['titele'];
        $noiDung = $ghiChu['content'];
        $phanLoai = $ghiChu['type_id'];

        $sql = "INSERT INTO  note_xoa (id,titele,content,type_id,user_id) VALUE ('$idNote','$tieuDe','$noiDung','$phanLoai',$id)";
        return mysqli_query($this->ketNoi->ketNoi(), $sql);
    }

    public function getAllXoa($id, $batDau, $doDai)
    {
        $sql = "SELECT * FROM note_xoa WHERE user_id = $id
                 LIMIT $batDau,$doDai";

        $resutl = mysqli_query($this->ketNoi->ketNoi(), $sql);
        $items = [];
        while ($row = mysqli_fetch_assoc($resutl)) {
            $items[] = $row;
        }
        return $items;
    }

    public function getNodeXoa($id)
    {
        $sql = "SELECT * FROM  note_xoa WHERE id= '$id'";
        $resutl = mysqli_query($this->ketNoi->ketNoi(), $sql);
        return mysqli_fetch_assoc($resutl);
    }

    public function deleteNoteXoa($id)
    {
        $sql = "DELETE FROM note_xoa WHERE id = '$id'";
        return mysqli_query($this->ketNoi->ketNoi(), $sql);
    }

    public function createNote($id, $user, $ghiChu)
    {
        $tieuDe = $ghiChu->tieude;
        $noiDung = $ghiChu->noidung;
        $phanLoai = $ghiChu->phanloai;
        $idUser = $this->getUser($user);

        $sql = "INSERT INTO  note (id,titele,content,type_id,user_id) VALUE ('$id','$tieuDe','$noiDung','$phanLoai','$idUser')";
        return mysqli_query($this->ketNoi->ketNoi(), $sql);
    }

    public function timNoteXoa($id, $thongTin, $phanLoai, $batDau, $doDai)
    {
        $sql = "SELECT * FROM note_xoa WHERE user_id = '$id'
                 AND titele LIKE '%$thongTin%' AND type_id ='$phanLoai'
                 LIMIT $batDau,$doDai";

        $resutl = mysqli_query($this->ketNoi->ketNoi(), $sql);
        $items = [];
        while ($row = mysqli_fetch_assoc($resutl)) {
            $items[] = $row;
        }
        return $items;
    }

    public  function tongNoteTimXoa($user, $thongTin, $phanLoai)
    {
        $id = +$this->getUser($user);
        $sql = "SELECT count(id) as total FROM note_xoa
                 WHERE titele LIKE '%$thongTin%' AND type_id ='$phanLoai' AND user_id='$id'";
                 
        $result = mysqli_query($this->ketNoi->ketNoi(), $sql);
        $row = mysqli_fetch_assoc($result);
        return $row['total'];
    }
}
