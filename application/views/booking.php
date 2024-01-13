<form class="form2">
        <table>
            <tr>
                <center>
                    <h1>Booking Form</h1>
                </center>
                <hr align="center" size="2" width="90%" color="black">
                <td>
                    <h3>BOOKING FORM</h3>
                    <div class="datapribadi">
                        <label for="full name" class="full name">Nama Lengkap</label>
                        <input type="text" id="fullname" placeholder="Nama Lengkap">
                        <label for="telp" class="telp">No Telpon</label>
                        <input type="text" id="telp" placeholder="0812********">
                        <label for="tempat lahir" class="tempatlahir">Tempat Lahir</label>
                        <input type="text" id="tempatlahir" placeholder="Tempat Lahir">
                        <label for="tanggal lahir" class="tanggallahir">Tanggal Lahir</label>
                        <input type="date" id="tanggallahir" placeholder="Tanggal Lahir">
                        <label for="jenis kelamin" class="jeniskelamin">Jenis Kelamin</label>
                        <select name="jeniskelamin" id="">
                            <option value="laki laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                </td>

                <td>
                    <h3>Alamat</h3>
                    <div class="alamat">
                        <label for="alamat lengkap" class="alamatlengkap">Alamat Lengkap</label>
                        <input type="text" id="alamat lengkap" placeholder="Alamat Lengkap">
                        <label for="location" class="location">Kota</label>
                        <input type="text" id="location" placeholder="Kota">
                        <label for="kota domisili" class="kotadomisili">Kota Domisili</label>
                        <input type="text" id="kotadomisili" placeholder="Kota Domisili">
                    </div>
                </td>

            </tr>

        </table>

        <h3>Data Peminjaman</h3>
        <div class="datapendidikan">
            <table>
                <tr>
                <td>
                    <div class="datapribadi">
                        <label for="jenis mobil" class="jenismobil">Jenis Mobil</label>
                        <select name="jenismobil" id="">
                            <option value="">Fortuner</option>
                            <option value="">Xenia</option>
                        </select>
                        <label for="tanggal pinjam" class="tanggalpinjam">Tanggal Peminjaman</label>
                        <input type="date" id="tanggalpinjam" placeholder="Tanggal Peminjaman">
                        <label for="tanggal kembali" class="tanggalkembali">Tanggal Pengembalian</label>
                        <input type="date" id="tanggalpengembalian" placeholder="Tanggal Pengembalian">
                        <label for="driver">Driver</label>
                        <select name="driverr" id="">
                            <option value="">Dengan Driver</option>
                            <option value="">Tanpa Driver</option>
                        </select>
                    </div>
                </td>
                </tr>
            </table>
        </div>

            <div class="button">
                <div class="warbutton">
                    <input type="submit" formaction="https://wa.me/6282122328955/" value="Submit">
                    <input type="submit" value="Batal">
                </div>
            </div>
        </form>