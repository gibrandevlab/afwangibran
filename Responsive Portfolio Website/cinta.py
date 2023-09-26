def cari_cinta():
    cinta = False
    kebahagiaan = 0

    while not cinta:
        kebahagiaan += 1

        if kebahagiaan == 100:
            cinta = True
            print("Selamat! Anda telah menemukan cinta.")
            print("Anda sekarang berada dalam hubungan yang bahagia dengan pacar Anda.")
            break

        print(f"Masih mencari cinta... Tingkat kebahagiaan: {kebahagiaan}")

def utama():
    print("Gibran sedang mencari cinta dan kebahagiaan...")
    cari_cinta()

if __name__ == '__main__':
    utama()
