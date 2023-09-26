uang_ibu = int(input("Masukan Jumlah uang : "))
harga_telur = int(input("Harga per kg telor: "))
berat_telur = int(input("Berat telor: "))
tarif_angkot = int(input("Ongkos :"))

biaya_telur = harga_telur * berat_telur
biaya_angkot_pp = tarif_angkot * 2 
total_biaya = biaya_telur + biaya_angkot_pp


sisa_uang = uang_ibu - total_biaya

print("Sisa uang Ibu adalah Rp", sisa_uang)