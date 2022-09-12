@echo off 
echo Hello this is batch script for test only

pause
for($i=0; $i<=10; $i++){
    if($i==3){
        goto 3
        :3
        dir e:\windows
    }
}
    
pause