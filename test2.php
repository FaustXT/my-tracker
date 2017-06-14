<?php
$map=[8,8,0,0];
    //0,1,2,3
echo "<pre>";
  for ($i=1;$i<=3;$i++){
    if($map[$i]==0) continue;
    for($y=$i;$y>0;$y--){
    if($map[$y-1]!=0)
      if($map[$y-1]==$map[$y]) {$map[$y-1]=$map[$y-1] << 1;
        $map[$y]=0; break;
        }
      else    break;
    $map[$y-1]=$map[$y];
    $map[$y]=0;break;
  //  if($map[$y-1]==0) break;

    }

  }

?>

    <?php foreach ($map as $key => $row): ?>
      
    <?php echo $row ?>
    <?php endforeach; ?>
