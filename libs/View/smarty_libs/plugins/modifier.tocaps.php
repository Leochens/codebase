<?php 
    function smarty_modifier_tocaps($str)
    {
        $ss="";
        $i=0;
        foreach ($str as $item) {
            switch ($item) {
                case '1':
                    $ss[$i]='一';
                    break;
                case '2':
                    $ss[$i]='二';
                    break;
                case '3':
                    $ss[$i]='三';
                    break;
                case '4':
                    $ss[$i]='四';
                    break;
                case '5':
                    $ss[$i]='五';
                    break;
                case '6':
                    $ss[$i]='六';
                    break;
                case '7':
                    $ss[$i]='七';
                    break;
                case '8':
                    $ss[$i]='八';
                    break;
                case '9':
                    $ss[$i]='九';
                    break;
                case '0':
                    $ss[$i]='零';
                    break;

                default:
                    $ss[$i]='?';
                    break;
            }

            $i+=1;
        }
        //echo "1";
        return $ss;

    }

 ?>