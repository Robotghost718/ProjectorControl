#!/usr/bin/env python
#turn HDMI2 Input on
import sys
import serial


port = serial.Serial('/dev/ttyUSB0', baudrate=9600, bytesize=8, parity=serial.PARITY_NONE, stopbits=1, timeout=5)
port.open
#this is the code sent to the projector.  Replace it for your model
port.write("\x33\x21\x1F")
received = port.read(8)
print received # newline is printed
port.close
