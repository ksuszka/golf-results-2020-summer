<? [,$e,$c]=$argv;$p=array_map(function($e){return[$e[0].$e[1],$e[2],$e[3],($e[0]<<2)^7*($e[1]<<3)^5,14];},explode(',',$c));function m($n){return$n<0?7:$n%8;}function g($a,$b){return in_array($a,[m($b-1),$b,m($b+1)]);}for(;$e;$e--)foreach($p as$i=>$_){$w=&$p[$i];$w[1]=='S'&&$w[4]--;$w[4]||$w[1]='R';$n=$w[3];$n^=$n<<13;$n^=$n>>17;$n^=$n<<5;$w[3]=$n%(1<<30);$x=$w[0][0];$y=$w[0][1];$r=$w[3]%4;!$r&&$x++;$r==1&&$x--;$r==2&&$y++;$r==3&&$y--;$c=m($x).m($y);$t=1;foreach($p as$m)$m[0]==$c&&$t=0;$w[2]!='1'&&$t&&$w[0]=$c;foreach($p as$m)$m[1]=='S'&&g($m[0][0],$w[0][0])&&g($m[0][1],$w[0][1])&&$w[1]=='H'&&$w[1]='S';}for($i=0;$i<64;$i++){$d='.';foreach($p as$m)$m[0]==($i%8).floor($i/8)&&$d=$m[1];echo$i%8==7?"$d\n":$d;}