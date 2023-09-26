#Penghitungan study case uang ibu versi konstanta by.gibran
uang_ibu = 200000
harga_telur = 26000
berat_telur = 5
tarif_angkot = 3500


biaya_telur = harga_telur * berat_telur
biaya_angkot_pp = tarif_angkot * 2 
total_biaya = biaya_telur + biaya_angkot_pp


sisa_uang = uang_ibu - total_biaya

print("Sisa uang Ibu adalah Rp", sisa_uang)
