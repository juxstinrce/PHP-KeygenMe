# PHP-KeygenMe
A simple keygen me with a loose comparison vulnerability using CSS from root-me.org

# Solution
```python
import random
valid = False
while valid == False :
      num = random.randint(1000000000,9999999999)
      if (int((((pow(num, 10)*1337)/313373)*1337)/1337133713371337133713371337133713371337133713371337133713371337133713371337133713371337)%31337) == 1337 :
            print("FLAG " + str(num))
            valid = True```
