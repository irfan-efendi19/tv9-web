# Dokumentasi API - TV9 Nusantara

Selamat datang di dokumentasi API TV9 Nusantara. API ini menyediakan akses publik ke data Katalog Program dan Jadwal Siaran untuk integrasi aplikasi pihak ketiga.

## Base URL
`http://localhost:8000/api`

---

## 1. Katalog Program
Digunakan untuk mengambil daftar program/film yang tersedia di galeri.

### Get All Catalog Items
Mengambil semua data katalog yang tersedia.
- **URL**: `/catalog`
- **Method**: `GET`
- **Response**:
```json
{
    "success": true,
    "message": "Katalog program berhasil diambil.",
    "data": [
        {
            "id": 1,
            "title": "Dokumenter Wali Songo",
            "description": "Kisah perjalanan dakwah...",
            "category": "Dokumenter",
            "image_url": "https://...",
            "created_at": "...",
            "updated_at": "..."
        }
    ]
}
```

### Get Detail Catalog
Mengambil detail satu item katalog berdasarkan ID.
- **URL**: `/catalog/{id}`
- **Method**: `GET`

---

## 2. Jadwal Siaran (Scheduling)
Digunakan untuk mengambil data jadwal siaran harian atau mingguan.

### Get Today's Schedule
Mengambil semua jadwal siaran untuk hari ini.
- **URL**: `/schedule/today`
- **Method**: `GET`
- **Response**:
```json
{
    "success": true,
    "day": 1,
    "message": "Jadwal hari ini berhasil diambil.",
    "data": [
        {
            "id": 10,
            "title": "Kajian Pagi",
            "start_time": "08:00:00",
            "end_time": "09:00:00",
            "day_of_week": 1,
            "category": "Religi"
        }
    ]
}
```

### Get Currently Playing
Mengambil informasi program yang sedang tayang saat ini berdasarkan waktu server.
- **URL**: `/schedule/current`
- **Method**: `GET`
- **Response**:
```json
{
    "success": true,
    "data": {
        "id": 10,
        "title": "Kajian Pagi",
        "start_time": "08:00:00",
        "end_time": "09:00:00"
    },
    "server_time": "08:15:30"
}
```

### Get Weekly Schedule
Mengambil seluruh jadwal selama satu minggu, dikelompokkan berdasarkan hari (1-7).
- **URL**: `/schedule/weekly`
- **Method**: `GET`

---

## Catatan Teknis
1. **Timezone**: Seluruh waktu menggunakan format `HH:mm:ss` (24 jam) berdasarkan waktu server (Asia/Jakarta).
2. **Autentikasi**: Saat ini seluruh endpoint di atas bersifat **Publik** dan dapat diakses tanpa token.
3. **Format Respons**: Seluruh respons dikirim dalam format JSON.
