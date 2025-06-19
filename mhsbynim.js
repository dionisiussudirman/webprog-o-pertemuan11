function caridata(){
                let a = window.location.search;
                let urla = new URLSearchParams(a);
                let nima = urla.get("nim");

                let urltarget = "http://localhost/pertemuan14/server/mhsbynim.php";
                let dta = `nim=${nima}`;
                $.ajax({
                    url: urltarget,
                    type: 'GET',
                    dataType: 'json',
                    data: dta,
                    success:function(dt){
                        $("#txNIM").val(dt["isi"]["NIM"]);
                        $("#txNAMA").val(dt["isi"]["NAMA"]);
                        $("#txTGL").val(dt["isi"]["TGL"]);
                        $("#txALAMAT").val(dt["isi"]["ALAMAT"]);
                        let j = (dt["isi"]["JENISKEL"]=="L")?1:2;
                        $("#txJK").prop("selectedIndex",j);

                    },
                    error:function(){
                        $("#gagal").show();
                    }
                });
            }