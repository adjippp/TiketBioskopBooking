/////////////////////////////////////////
/*
Programer : Agus Sumarna
Describe  : File Ajax untuk halaman USER
*/
/////////////////////////////////////////
//untuk cek login
function ceklogin(){
	var user= document.getElementById('userid').value;
	var pass= document.getElementById('passwd').value;
	var mode= document.getElementById('mode').value;
	
	if(user.replace(/^\s+|\s+$/g, '')==''){
		alert('Username Harus Diisi!');
		return false;
	} 
	
	if(pass.replace(/^\s+|\s+$/g, '')==''){
		alert('Password Harus diisi!');
		return false;
	}
	
	if(mode=='blank'){
		alert('Mode harus dipilih!');
		return false;
	}
	
	return true;
}