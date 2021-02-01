#!/bin/python3

WARN = 'Part of your input is in BLACKLIST'

BLACKLIST = ['import', 'os', 'system', 'subprocess', 'eval', 'exec', 'input', 'open',
             '_', '[', ']']

def main():	
	SAFE = True

	print("Try escaping from this jail. Don't overthink it.")
	for i in range(0, 2):
		execute = input('>>> ')

		for i in BLACKLIST:
			if i in execute:
				SAFE = False

		if SAFE == True:
			exec(execute)
		else:
			print(WARN)
			SAFE = True

if __name__ == '__main__':
	main()
