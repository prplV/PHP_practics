<?php
	$bday=$_REQUEST['bday'];
	$bmonth=$_REQUEST['bmonth'];
	$byear=$_REQUEST['byear'];
	$tday=$_REQUEST['tday'];
	$tmonth=$_REQUEST['tmonth'];
	$tyear=$_REQUEST['tyear'];
	
    $daysgone = 0;
    $tyears = 0;
    $china = 0;
    $bmonthes = 0;
    $tmonthes = 0;
    $china = $byear % 12;
	$otv2='';
	$otv3='';
	$otv4='';
    
    $years11 = $byear/4 + 1;
    $years12 = $byear - $years11;
    $years21 = $tyear/4 + 1;
    $years22 = $tyear - $years21;
    $byears = ($years11*365)+($years12*366);
    $tyears = ($years21*365)+($years22*366);
    $bdays = $bday;
    $tdays = $tday;
	
    for ($i = 1; $i<=$bmonth; $i++)
    {
        if ($i % 2 == 0)
        {
            if (($i == 2)and($byear % 4  == 0))
            {
                $bmonthes += 29;
            }
            else
            {
                if (($i == 2)and($byear % 4  != 0))
                {
                    $bmonthes += 28;
                }
                else
                {
                    if ((($i == 8)or($i==10)or($i==12)))
                    {
                        $bmonthes += 31;
                    }
                }
            }
        }
        else
        {
            if ($i > 7)
            {
            	$bmonthes += 30;
            }
            else
            {
            	$bmonthes += 31;
            }
        }
    }
    for ($i = 1; $i<=$tmonth; $i++)
    {
	    if ($i % 2 == 0)
	    {
	        if (($i == 2)and($tyear % 4  == 0))
	        {
	            $tmonthes += 29;
	        }
	        else
	        {
	            if (($i == 2)and($tyear % 4 != 0))
	            {
	                $tmonthes += 28;
	            }
	            else
	            {
	                if ((($i == 8)or($i==10)or($i==12)))
	                {
	                    $tmonthes += 31;
	                }
	            }
	        }
	    }
	    else
	    {
	        if ($i > 7)
            {
            	$tmonthes += 30;
            }
            else
            {
            	$tmonthes += 31;
            }
	    }
    }
    $daysgone = round(($tyears + $tmonthes + $tdays) - ($byears + $bmonthes + $bdays) - 8)-1;
	
    if ($byear % 4 == 0)
    {
    	$otv2="високосный";
    }
    else
    {
    	$otv2="невисокосный";
    }
    

	switch ($china)
	{
		case 4:
		{
			$otv3="Год крысы";
			break;
		}
		case 5:
		{
			$otv3="Год быка";
			break;
		}
		case 6:
		{
			$otv3="Год тигра";
			break;
		}
		case 7:
		{
			$otv3="Год кролика";
			break;
		}
		case 8:
		{
			$otv3="Год дракона";
			break;
		}
		case 9:
		{
			$otv3="Год змеи";
			break;
		}
		case 10:
		{
			$otv3="Год лошади";
			break;
		}
		case 11:
		{
			$otv3="Год козы";
			break;
		}
		case 0:
		{
			$otv3="Год обезьяны";
			break;
		}
		case 1:
		{
			$otv3="Год петуха";
			break;
		}
		case 2:
		{
			$otv3="Год собаки";
			break;
		}
		case 3:
		{
			$otv3="Год свиньи";
			break;
		}
		default:
			{
				$otv3="Ошибка! Неверный год рождения!";
				break;
			}
	}
	if ($bmonth == 1)
	{
		if ($bday < 20)
		{
			$otv4="Козерог";
		} 
		else
		{
			$otv4="Водолей";
		}
	}
	if ($bmonth == 2)
	{
		if ($bday < 19)
		{
			$otv4="Водолей";
		} 
		else
		{
			$otv4="Рыбы";
		}
	}
	if ($bmonth == 3)
	{
		if ($bday < 20)
		{
			$otv4="Рыбы";
		} 
		else
		{
			$otv4="Овен";
		}
	}
	if ($bmonth == 4)
	{
		if ($bday < 19)
		{
			$otv4="Овен";
		} 
		else
		{
			$otv4="Телец";
		}
	}
	if ($bmonth == 5)
	{
		if ($bday < 20)
		{
			$otv4="Телец";
		} 
		else
		{
			$otv4="Близнецы";
		}
	}
	if ($bmonth == 6)
	{
		if ($bday < 20)
		{
			$otv4="Близнецы";
		} 
		else
		{
			$otv4="Рак";
		}
	}
	if ($bmonth == 7)
	{
		if ($bday < 22)
		{
			$otv4="Рак";
		} 
		else
		{
			$otv4="Лев";
		}
	}
	if ($bmonth == 8)
	{
		if ($bday < 22)
		{
			$otv4="Лев";
		} 
		else
		{
			$otv4="Дева";
		}
	}
	if ($bmonth == 9)
	{
		if ($bday < 22)
		{
			$otv4="Дева";
		} 
		else
		{
			$otv4="Весы";
		}
	}
	if ($bmonth == 10)
	{
		if ($bday < 23)
		{
			$otv4="Весы";
		} 
		else
		{
			$otv4="Скорпион";
		}
	}
	if ($bmonth == 11)
	{
		if ($bday < 22)
		{
			$otv4="Скорпион";
		} 
		else
		{
			$otv4="Стрелец";
		}
	}
	if ($bmonth == 12)
	{
		if ($bday < 21)
		{
			$otv4="Стрелец";
		} 
		else
		{
			$otv4="Козерог";
		}
	}

?>

<html>
	<head>
		<link rel="stylesheet" href="1.css">
	</head>

	<body>
		<div>
			<h1>Онлайн-оракул</h1>
		</div>
		
		<div class="table-option">
			<br>
			<p align="center"><b>Анализ завершён!</b></p>
			<br>
			<table class="table-borderline">
				<tr>
					<td>1.</td>
					<td>Вы прожили</td>
					<td><?php echo "$daysgone дней";?></td>
				</tr>
				<tr>
					<td>2.</td>
					<td>Год рождениия</td>
					<td><?php echo "$otv2";?></td>
				</tr>
				<tr>
					<td>3.</td>
					<td>По китайскому календарю вы родились в</td>
					<td><?php echo "$otv3";?></td>
				</tr>
				<tr>
					<td>4.</td>
					<td>По знаку зодиака вы</td>
					<td><?php echo "$otv4";?></td>
				</tr>
			</table>
		</div>
	</body>
</html>