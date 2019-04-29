function chk_phoneno(obj)
		{
			var phone =obj.value;
			if( /[^0-9\ \/\s]/.test( phone ))
			{
				$('#valid_'+obj.id).text('Only Numbers');
				vals =  phone.substr(0, phone.length - 1);
				$('#'+obj.id).val(vals);
				return false;
			}
			else{
				if(phone.length<10){
				$('#valid_'+obj.id).text('Enter Full Mobile No.');
				return false;
				}else{				
				$('#valid_'+obj.id).text('');
				}
			}
		}