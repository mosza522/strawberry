
		<?php
		if( $memu['0'] )
		{
			foreach($memu['0'] AS $m)
			{
				if( $memu[$m['id']] )
				{
					if( ($_GET['c'] == $m['component']) || ( $active[$m['id']] AND in_array( '?c='.$_GET['c'], $active[$m['id']] ) ) )
					{
						echo "<li class=\"has-sub active\">";
					}
					else
					{
						echo "<li class=\"has-sub\">";
					}
					echo "<a href=\"javascript:;\">
					        <b class=\"caret pull-right\"></b>
					        <i class=\"fa fa-align-left\"></i>
					        <span>{$m['name']}</span>
					    </a>"; 
					echo "<ul class=\"sub-menu\">";
					foreach($memu[$m['id']] AS $s)
					{
						echo "<li><a href=\"../{$s['link']}\" data-toggle=\"ajax\">{$s['name']}</a></li>";
					}
					echo	"</ul></li>";
				}
				else
				{
					if( ($_GET['c'] == $m['component']) || ( $active[$m['id']] AND in_array( '?c='.$_GET['c'], $active[$m['id']] ) ) )
					{
						echo "<li class=\"active\">";
					}
					else
					{
						echo "<li>";
					}
					echo "<a href=\"../{$m['link']}\"><i class=\"fa fa-align-left\"></i><span>{$m['name']}</span></a></li>";
				}
			}
		}

		?>