<?php
//total array yang disiapkan untuk disimpan
$todos  = [];
//melakukan pengecekan apakah file todo.txt ditemukan
if (file_exists('todo.txt')) {
    //membaca file todo.txt
    $file   =   file_get_contents('todo.txt');
    //mengubah format serialize menjadi array
    $todos  =   unserialize($file);
}
//Jika ditemukan todo yang dikirim melalui methode POST
if (isset($_POST['todo'])) {
    $data   = $_POST['todo']; // data yang dipilih pada form
    $todos[] = [
        'todo'  => $data,
        'status' => 0
    ];
    saveData($todos);
}
//jika ditemukan $_GET['status']
if (isset($_GET['status'])) {
    //ubah status
    $todos[$_GET['key']]['status'] = $_GET['status'];
    saveData($todos);
}

if (isset($_GET['hapus'])) {
    unset($todos[$_GET['key']]);
    saveData($todos);
}

function saveData($todos)
{
    $daftar = serialize($todos);
    file_put_contents('todo.txt', $daftar);
    //redirect halaman
    header('location:todo.php');
}
?>
<h1>Todo App</h1>
<form action="" method="POST">
    <label>Daftar To Do Hari ini<label><br>
            <input type="text" name="todo">
            <button type="submit">Simpan</button>
</form>
<ul>
    <ul>
        <?php foreach ($todos as $key => $value) : ?>
            <li>
                <input type="checkbox" name="todo" onclick="window.location.href='todo.php?status=<?php echo ($value['status'] == 1) ? '0' : '1'; ?>&key=<?php echo $key; ?>'" ; <?php if ($value['status'] == 1) echo 'checked' ?>>
                <label>
                    <?php
                    if ($value['status'] == 1) {
                        echo '<del>' . $value['todo'] . '</del>';
                    } else {
                        echo $value['todo'];
                    }
                    ?>
                </label>
                <a href='todo.php?hapus=1&key=<?php echo $key ?>' onclick="return confirm('Apakah Anda yakin menghapus to do list ini?')"">hapus</a>
            </li>
        <?php endforeach; ?>
    </ul>