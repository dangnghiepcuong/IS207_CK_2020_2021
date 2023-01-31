create table KHACHHANG (MaKH varchar(5) PRIMARY KEY, HoTenKH varchar(50), DiaChi varchar(500), DienThoai varchar(10));
create table XE(SOXE varchar(10), HangXe varchar(50), NamSX int(4), MaKH varchar(5), FOREIGN KEY (MaKH) REFERENCES KHACHHANG(MaKH));
create table BAODUONG(MaBD varchar(5) PRIMARY KEY, NgayNhan varchar(10), NgayTra varchar(10), SoKM float(7,1), NoiDung varchar(200), SoXe varchar(10), ThanhTien int(8), FOREIGN KEY (SoXE) REFERENCES XE(SoXe));
CREATE TABLE CONGVIEC (MaCV varchar(5) PRIMARY KEY, TenCV varchar(100), DonGia int(8));
CREATE TABLE CT_BD(MaBD varchar(5), MaCV varchar(5), FOREIGN KEY (MaBD) REFERENCES BAODUONG(MaBD), FOREIGN KEY (MaCV) REFERENCES CONGVIEC(MaCV));