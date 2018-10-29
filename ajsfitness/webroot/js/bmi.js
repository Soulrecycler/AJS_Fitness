
function calculateBmi()
 {
		var weight = document.bmiForm.weight.value;
		var height = document.bmiForm.height.value;
			if(weight > 0 && height > 0)
			{	
					var finalBmi = weight/(height/100*height/100);
					document.bmiForm.bmi.value = finalBmi;
				if(finalBmi < 18.5)
				{
						document.bmiForm.meaning.value = "UNDERWEIGHT";
				}
				
					if(finalBmi > 18.5 && finalBmi < 25)
					{
							document.bmiForm.meaning.value = "NORMAL WEIGHT";
					}

					if(finalBmi > 25 && finalBmi < 30)
					{
							document.bmiForm.meaning.value = "OVER WEIGHT";
					}
				if(finalBmi > 30)
					{
						document.bmiForm.meaning.value = "OBESE";
					}
			}
			else
			{
				alert("Please Fill in everything correctly");
			}
	}	
