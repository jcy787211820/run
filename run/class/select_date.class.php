<?php
class select_date
	{
		private $day;
		private $select_year_tag;
		private $select_month_tag;
		private $select_day_tag1;
		private $select_day_tag2;
		private $setvalue;
		function __construct($date="")
			{
				if(empty($date))
					$this->day = date('Y-m-d');
				else
					$this->day = $date;	
			}
		function select_year($tag="",$sec_year="",$script_str="")
			{
				if(empty($tag))
					$this->select_year_tag = 'selectyear';
				else
					$this->select_year_tag = $tag;
				$year = substr($this->day,0,4);
				$select_year="<select id='$this->select_year_tag' name='$this->select_year_tag' $script_str>";
				for($i=$year; $i>$year-150; $i--)
					{
						if($sec_year==$i)
							$select_year .="<option value='$i' selected>$i"."��</option>";
						else
							$select_year .= "<option value='$i'>$i"."��</option>";
					}		
				$select_year.="</select>";
				return $select_year;
			}
		function select_month($tag="",$sec_month="",$script_str="")
			{
				if(empty($tag))
					$this->select_month_tag = 'selectmonth';
				else
					$this->select_month_tag = $tag;
				$month =substr($this->day,5,2);
				$select_month = "<select id='$this->select_month_tag' name='$this->select_month_tag' $script_str>";
					for($i=1; $i<=12; $i++)
						{
							if($sec_month==$i)
								$select_month .="<option value='$i' selected>$i"."��</option>";
							else
								$select_month .="<option value='$i'>$i"."��</option>";
						}
				$select_month .= "</select>";
				return $select_month;
			}
		function select_day($tag="",$sec_day)
			{
				if(empty($tag))
					$this->select_day_tag = 'selectday';
				else
					$this->select_day_tag = $tag;
				$total = 31;
					
				$select_day = "<div id='resetday'><select id='$this->select_day_tag' name='$this->select_day_tag'>";
				for($i=1; $i<=31; $i++)
					{
						if($sec_day==$i)
							$select_day .="<option value='$i' selected>$i"."��</option>";
						else
							$select_day .="<option value='$i'>$i"."��</option>";
					}
				$select_day .= "</select></div>";				
				return $select_day;
			}
		function select_date($tag1="",$tag2="",$tag3="")
			{
				$selectyear = $this->select_year($tag1);
				$selectmonth = $this->select_month($tag2);
				$selectday = $this->select_day($tag3);
				$selectdate = $selectyear . $selectmonth . $selectday;
				return $selectdate;
			}
	}
?>