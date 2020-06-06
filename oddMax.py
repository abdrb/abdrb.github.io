list=[18,2,3,4,5,6,7,8,9,2]
def maxOddd(m):
	max=0
	msg="N"
	for n in m:
		if n > max:
			max=n
			if max % 2 == 0:
				max=0
			else:
				msg=n
	return msg

print (maxOddd(list))

def maxOdd():
	max=0
	output = "No odd number"
	for n in range(10):
		num=input("Enter the " + str(n+1) + " number: ")
		if int(num) > max:
			max = int(num)
			if max % 2 == 0:
				max = 0
			else:
				output=num
	return output

print (maxOdd())
