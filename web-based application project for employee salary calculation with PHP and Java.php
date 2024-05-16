<html>
<head><title>Menghitung gaji</title></head>

<body>
<h1><center> Form Penggajian </center></h1>
<form methode="GET">
<table>
<tr>
<td>Nama</td>
<td> : </td>
<td><input type=text name=nama size=27></td>
</tr>
<tr>
<td>NIP</td>
<td> : </td>
<td><input type=text name=nip size=27></td>
</tr>
<tr>
<td>Golongan</td>
<td> : </td>
<td> <select name="golongan">
    <option value="1" selected="selected"> - </option>
    <option value="2"> A </option>
    <option value="3"> B </option>
    <option value="4"> C </option>
    
    </td>
</tr>	

<td>Status Perkawinan</td>
<td> : </td>
<td>
    <select name=status>
    <option value="1" selected="selected"> - </option>
        <option value="s"> Single </option>
        <option value="m">  Menikah </option>
		 <option value="d"> Duda/Janda </option></select></td>
		
</tr>
</tr>
<td>Jumlah Anak</td>
<td> : </td>
<td>
    <select name=anak>
    <option value="1" selected="selected"> - </option>
        <option value="2"> 0 </option>
        <option value="3"> 1 </option>
		<option value="4"> 2 </option>
		<option value="5"> >=3  </option></select></td>
</tr>

<tr>
    <td colspan="3"><input type=Submit name="proses" value=Hitung><input type=reset name="batal" value=Hapus></td>
</tr>

</table>
</form>
</body>
</html>

<?php
$nama=isset($_GET['nama'])?$_GET['nama']:'';
$nip=isset($_GET['nip'])?$_GET['nip']:'';
$gol=isset($_GET['golongan'])?$_GET['golongan']:'';
$status=isset($_GET['status'])?$_GET['status']:'';
$anak=isset($_GET['anak'])?$_GET['anak']:'';
$total=isset($_GET['total'])?$_GET['total']:'';
$pajak=isset($_GET['pajak'])?$_GET['pajak']:'';
$gaji=isset($_GET['gaji'])?$_GET['gaji']:'';

if(!empty($nama) and !empty($gol) and !empty($anak) and !empty($status))
{
    ?>
<table border="1">
<tr>
    <td> Nama </td>
    <td> : </td>
    <td>
        <?php
        if (!empty($nama))
            {
                echo $nama ;
            }
        else
            {   
            echo"<script>alert('Masukkan Nama')</script>";
            }
        ?> </td>
</tr>
<tr>
    <td> NIP </td>
    <td> : </td>
    <td>
        <?php
        if (!empty($nip))
            {
                echo $nip ;
            }
        else
            {   
            echo"<script>alert('Masukkan NIP')</script>";
            }
        ?> </td>
</tr>
<tr>
    <td> Golongan </td>
    <td> : </td>
    <td>
        <?php
        if (!empty($golongan))
            {
                echo $golongan ;
            }
        else
            {   
            echo"<script>alert('Masukkan Golongan')</script>";
            }
        ?> </td>
</tr>
<tr>
    <td> Gaji Pokok </td>
    <td> : </td>
    <td> <?php
        if ($gol=="2")
        {
            echo "1.500.000";
        }
        elseif ($gol=="3")
        {
            echo "1.000.000";
        }       
        elseif ($gol=="4")
        {
            echo "750.000";
        }
        ?></td>
</tr>
<tr>
    <td>
        <?php echo "Tunjangan"; ?></td>
    <td> : </td>
    <td> <?php
        if ($anak=="2" && $status=="m")
        {
            echo "300.000";
        }
        elseif ($anak=="2" && $status=="s")
        {
            echo "Tidak ada";
        }       
		elseif ($anak=="2" && $status=="d")
        {
            echo "150.000";
        }       
        elseif ($anak=="3"&& $status=="s")
        {
            echo "Tidak Ada";
        }
        elseif ($anak=="3" && $status=="m")
        {
            echo "450.000";
        } 
		 elseif ($anak=="3" && $status=="d")
        {
            echo "300.000";
        } 
		elseif ($anak=="4" && $status=="s")
        {
            echo "Tidak Ada";
        } 	
		elseif ($anak=="4" && $status=="m")
        {
            echo "600.000";
		}
		elseif ($anak=="4" && $status=="d")
        {
            echo "450.000";
        } 
			elseif ($anak=="5" && $status=="s")
        {
            echo "Tidak Ada";
        } 	
		elseif ($anak=="5" && $status=="m")
        {
            echo "750.000";
		}
			elseif ($anak=="5" && $status=="d")
        {
            echo "600.000";
        }?></td>
</tr>
<tr>
<td> Total Gaji </td>
 <td> : </td>
    <td> <?php 
        if ($gol==2 && $anak=="2" && $status=="s")
        {
            echo "1.500.000";
        }
        elseif ($gol==2 && $anak=="2" && $status=="m")
        {
            echo "1.800.000";
        }  
		 elseif ($gol==2 && $anak=="2" && $status=="d")
        {
            echo "1.650.000";
        } 
        elseif ($gol==2 && $anak=="3"&& $status=="s")
        {
            echo "1.500.000";
        }
        elseif ($gol==2 && $anak=="3" && $status=="m")
        {
            echo "1.1950.000";
        }
		 elseif ($gol==2 && $anak=="3" && $status=="d")
        {
            echo "1.800.000";
        }
		elseif ($gol==2 && $anak=="4" && $status=="s")
        {
            echo "1.500.000";
        }
		elseif ($gol==2 && $anak=="4" && $status=="m")
        {
            echo "2.100.000";
        }
		elseif ($gol==2 && $anak=="4" && $status=="d")
        {
            echo "1.950.000";
        }
			elseif ($gol==2 && $anak=="5" && $status=="s")
        {
            echo "1.500.000";
        }
		elseif ($gol==2 && $anak=="5" && $status=="m")
        {
            echo "2.250.000";
        }
		elseif ($gol==2 && $anak=="5" && $status=="d")
        {
            echo "2.100.000";
        }
		if ($gol==3 && $anak=="2" && $status=="s")
        {
            echo "1.000.000";
        }
        elseif ($gol==3 && $anak=="2" && $status=="m")
        {
            echo "1.200.000";
        }
        elseif ($gol==3 && $anak=="2" && $status=="d")
        {
            echo "1.100.000";
        }		
        elseif ($gol==3 && $anak=="3"&& $status=="s")
        {
            echo "1.000.000";
        }
        elseif ($gol==3 && $anak=="3" && $status=="m")
        {
            echo "1.300.000";
        }
		elseif ($gol==3 && $anak=="3" && $status=="d")
        {
            echo "1.200.000";
        }
		elseif ($gol==3 && $anak=="4" && $status=="s")
        {
            echo "1.000.000";
        }
		elseif ($gol==3 && $anak=="4" && $status=="m")
        {
            echo "1.400.000";
        }
		elseif ($gol==3 && $anak=="4" && $status=="d")
        {
            echo "1.300.000";
        }
		elseif ($gol==3 && $anak=="5" && $status=="s")
        {
            echo "1.000.000";
        }
		elseif ($gol==3 && $anak=="5" && $status=="m")
        {
            echo "1.500.000";
        }
		elseif ($gol==3 && $anak=="5" && $status=="d")
        {
            echo "1.400.000";
        }
		if ($gol==4 && $anak=="2" && $status=="s")
        {
            echo "750.000";
        }
        elseif ($gol==4 && $anak=="2" && $status=="m")
        {
            echo "900.000";
        } 
		elseif ($gol==4 && $anak=="2" && $status=="d")
        {
            echo "825.000";
        }    		
        elseif ($gol==4 && $anak=="3"&& $status=="s")
        {
            echo "750.000";
        }
        elseif ($gol==4 && $anak=="3" && $status=="m")
        {
            echo "975.000";
        }
		elseif ($gol==4 && $anak=="3" && $status=="d")
        {
            echo "900.000";
        }
		elseif ($gol==4 && $anak=="4" && $status=="s")
        {
            echo "750.000";
        }
		elseif ($gol==4 && $anak=="4" && $status=="m")
        {
            echo "1.050.000";
        }
		elseif ($gol==4 && $anak=="4" && $status=="d")
        {
            echo "975.000";
        }
		elseif ($gol==4 && $anak=="5" && $status=="s")
        {
            echo "750.000";
        }
		elseif ($gol==4 && $anak=="5" && $status=="m")
        {
            echo "1.125.000";
        }
		elseif ($gol==4 && $anak=="5" && $status=="d")
        {
            echo "1.050.000";
        }
        ?></td>
</tr>
<tr>
<td> pajak </td>
 <td> : </td>
    <td> <?php
        if ($gol==2 && $anak=="2" && $status=="s")
        {
            echo "150.000";
        }
        elseif ($gol==2 && $anak=="2" && $status=="m")
        {
            echo "150.000";
        }    
			elseif ($gol==2 && $anak=="2" && $status=="d")
        {
            echo "150.000";
        }    
        elseif ($gol==2 && $anak=="3"&& $status=="s")
        {
            echo "150.000";
        }
        elseif ($gol==2 && $anak=="3" && $status=="m")
        {
            echo "150.000";
        }
			elseif ($gol==2 && $anak=="3" && $status=="d")
        {
            echo "150.000";
        }  
		elseif ($gol==2 && $anak=="4" && $status=="s")
        {
            echo "150.000";
        }
		elseif ($gol==2 && $anak=="4" && $status=="m")
        {
            echo "150.000";
        }
			elseif ($gol==2 && $anak=="4" && $status=="d")
        {
            echo "150.000";
        }  
		elseif ($gol==2 && $anak=="5" && $status=="s")
        {
            echo "150.000";
        }
		elseif ($gol==2 && $anak=="5" && $status=="m")
        {
            echo "150.000";
        }
			elseif ($gol==2 && $anak=="5" && $status=="d")
        {
            echo "150.000";
        } 
		if ($gol==3 && $anak=="2" && $status=="s")
        {
            echo "100.000";
        }
        elseif ($gol==3 && $anak=="2" && $status=="m")
        {
            echo "100.000";
        }
		elseif ($gol==3 && $anak=="2" && $status=="d")
        {
            echo "100.000";
        }  		
        elseif ($gol==3 && $anak=="3"&& $status=="s")
        {
            echo "100.000";
        }
        elseif ($gol==3 && $anak=="3" && $status=="m")
        {
            echo "100.000";
        }
			elseif ($gol==3 && $anak=="3" && $status=="d")
        {
            echo "100.000";
        }  
		elseif ($gol==3 && $anak=="4" && $status=="s")
        {
            echo "100.000";
        }
		elseif ($gol==3 && $anak=="4" && $status=="m")
        {
            echo "100.000";
        }
			elseif ($gol==3 && $anak=="4" && $status=="d")
        {
            echo "100.000";
        } 
		elseif ($gol==3 && $anak=="5" && $status=="s")
        {
            echo "100.000";
        }
		elseif ($gol==3 && $anak=="5" && $status=="m")
        {
            echo "100.000";
        }
			elseif ($gol==3 && $anak=="5" && $status=="d")
        {
            echo "100.000";
        } 
		if ($gol==4 && $anak=="2" && $status=="s")
        {
            echo "75.000";
        }
        elseif ($gol==4 && $anak=="2" && $status=="m")
        {
            echo "75.000";
        }      
		elseif ($gol==4 && $anak=="2" && $status=="d")
        {
            echo "75.000";
        }  
        elseif ($gol==4 && $anak=="3"&& $status=="s")
        {
            echo "75.000";
        }
        elseif ($gol==4 && $anak=="3" && $status=="m")
        {
            echo "75.000";
        }
			elseif ($gol==4 && $anak=="3" && $status=="d")
        {
            echo "75.000";
        }  
		elseif ($gol==4 && $anak=="4" && $status=="s")
        {
            echo "75.000";
        }
		elseif ($gol==4 && $anak=="4" && $status=="m")
        {
            echo "75.000";
        }
			elseif ($gol==4 && $anak=="4" && $status=="d")
        {
            echo "75.000";
        }  
		elseif ($gol==4 && $anak=="5" && $status=="s")
        {
            echo "75.000";
        }
		elseif ($gol==4 && $anak=="5" && $status=="m")
        {
            echo "75.000";
        }
			elseif ($gol==4 && $anak=="5" && $status=="d")
        {
            echo "75.000";
        }  
        ?></td>
</tr>
<tr>
<td> Gaji Bersih </td>
 <td> : </td>
    <td> <?php 
        if ($gol==2 && $anak=="2" && $status=="s")
        {
            echo "1.350.000";
        }
        elseif ($gol==2 && $anak=="2" && $status=="m")
        {
            echo "1.650.000";
        }  
		elseif ($gol==2 && $anak=="2" && $status=="d")
        {
            echo "1.500.000";
        }       
        elseif ($gol==2 && $anak=="3"&& $status=="s")
        {
            echo "1.350.000";
        }
        elseif ($gol==2 && $anak=="3" && $status=="m")
        {
            echo "1.800.000";
        }
		 elseif ($gol==2 && $anak=="3" && $status=="d")
        {
            echo "1.650.000";
        }
		elseif ($gol==2 && $anak=="4" && $status=="s")
        {
            echo "1.350.000";
        }
		elseif ($gol==2 && $anak=="4" && $status=="m")
        {
            echo "1.950.000";
        }
		elseif ($gol==2 && $anak=="4" && $status=="d")
        {
            echo "1.800.000";
        }
		if ($gol==2 && $anak=="5" && $status=="s")
        {
            echo "1.350.000";
        }
        elseif ($gol==2 && $anak=="5" && $status=="m")
        {
            echo "2.100.000";
        } 
		elseif ($gol==2 && $anak=="5" && $status=="d")
        {
            echo "1.950.000";
        }       
        if ($gol==3 && $anak=="2" && $status=="s")
        {
            echo "900.000";
        }
        elseif ($gol==3 && $anak=="2" && $status=="m")
        {
            echo "1.100.000";
        }  
		elseif ($gol==3 && $anak=="2" && $status=="d")
        {
            echo "1.000.000";
        }       
        elseif ($gol==3 && $anak=="3"&& $status=="s")
        {
            echo "900.000";
        }
        elseif ($gol==3 && $anak=="3" && $status=="m")
        {
            echo "1.200.000";
        }
		 elseif ($gol==3 && $anak=="3" && $status=="d")
        {
            echo "1.100.000";
        }
		elseif ($gol==3 && $anak=="4" && $status=="s")
        {
            echo "900.000";
        }
		elseif ($gol==3 && $anak=="4" && $status=="m")
        {
            echo "1.300.000";
        }
		elseif ($gol==3 && $anak=="4" && $status=="d")
        {
            echo "1.200.000";
        }
		if ($gol==3 && $anak=="5" && $status=="s")
        {
            echo "900.000";
        }
        elseif ($gol==3 && $anak=="5" && $status=="m")
        {
            echo "1.400.000";
        } 
		elseif ($gol==3 && $anak=="5" && $status=="d")
        {
            echo "1.300.000";
        } 
		if ($gol==4 && $anak=="2" && $status=="s")
        {
            echo "675.000";
        }
        elseif ($gol==4 && $anak=="2" && $status=="m")
        {
            echo "825.000";
        }  
		elseif ($gol==4 && $anak=="2" && $status=="d")
        {
            echo "750.000";
        }       
        elseif ($gol==4 && $anak=="3"&& $status=="s")
        {
            echo "675.000";
        }
        elseif ($gol==4 && $anak=="3" && $status=="m")
        {
            echo "900.000";
        }
		 elseif ($gol==4 && $anak=="3" && $status=="d")
        {
            echo "825.000";
        }
		elseif ($gol==4 && $anak=="4" && $status=="s")
        {
            echo "675.000";
        }
		elseif ($gol==4 && $anak=="4" && $status=="m")
        {
            echo "975.000";
        }
		elseif ($gol==4 && $anak=="4" && $status=="d")
        {
            echo "900.000";
        }
		if ($gol==4 && $anak=="5" && $status=="s")
        {
            echo "675.000";
        }
        elseif ($gol==4 && $anak=="5" && $status=="m")
        {
            echo "1.050.000";
        } 
		elseif ($gol==4 && $anak=="5" && $status=="d")
        {
            echo "975.000";
        } 
        ?></td>
</tr>
</table>
<?php
}
else
{
    echo"<script>alert('Data Kosong')</script>";
}
