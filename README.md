# PHP-KeygenMe
A simple keygen me with a loose comparison vulnerability using CSS from root-me.org

# Solution
import random<br>
valid = False<br>
while valid == False :<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;num = random.randint(1000000000,9999999999)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (int((((pow(num, 10)*1337)/313373)*1337)/1337133713371337133713371337133713371337133713371337133713371337133713371337133713371337)%31337) == 1337 :
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print("FLAG " + str(num))<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;valid = True<br>
