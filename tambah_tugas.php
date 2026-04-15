<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Tugas Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm mx-auto" style="max-width: 500px;">
            <div class="card-body">
                <h4 class="card-title mb-4">Tambah Tugas/Acara</h4>
                
                <form action="proses_tambah.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nama Tugas/Acara</label>
                        <input type="text" name="judul_tugas" class="form-control" placeholder="Contoh: Laporan Basis Data" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deadline</label>
                        <input type="datetime-local" name="deadline" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Prioritas</label>
                        <select name="prioritas" class="form-select">
                            <option value="Low">Rendah (Low)</option>
                            <option value="Medium" selected>Sedang (Medium)</option>
                            <option value="High">Penting (High)</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi (Opsional)</label>
                        <textarea name="deskripsi" class="form-control" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Simpan Jadwal</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
