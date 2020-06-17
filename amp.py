import time
import serial
ser = serial.Serial('/dev/ttyUSB0', 38400)
ser.write(b'P')
time.sleep(3.3)
ser.close()

