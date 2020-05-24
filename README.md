# PHP-KeygenMe
A simple keygen me with a loose comparison vulnerability using CSS from root-me.org

# Solution
`
import random<br>
valid = False<br>
while valid == False :<br>
  num = random.randint(1000000000,9999999999)<br>
  if (int((((pow(num, 10)*1337)/313373)*1337)<br>/1337133713371337133713371337133713371337133713371337133713371337133713371337133713371337)%31337) == 1337 :<br>
    print("FLAG " + str(num))<br>
    valid = True`<br>
