#coding:utf-8
import tkinter as tk
import time
from multiprocessing import Process, Value
import webbrowser
from flask import Flask, render_template, request
from multiprocessing import Process
import csv
import xlsxwriter
from xlrd import open_workbook
import xlwt
import os.path
Configuring={}
Intersection={}
Plan={}
Maps=[]
LARGE_FONT= ("Verdana", 12)
app1 = Flask(__name__)
@app1.route('/',methods=["GET", "POST"])
def test():
    if request.method == 'POST':
        f13_answer=request.form['jobnumber']
        print(f13_answer)
        return render_template('test.html')
    else:
        return render_template('test.html')
@app1.route('/shutdown',methods=["GET", "POST"])
def test1():
    app=['1','2']
    print(app)
    return render_template('test.html')
class SeaofBTCapp(tk.Tk):

    def __init__(self, *args, **kwargs):
        __author__ = 'Vikranth'
        tk.Tk.__init__(self, *args, **kwargs)
        container = tk.Frame(self)

        container.pack(side="top", fill="both", expand = True)
        container.grid_rowconfigure(0, weight=1)
        container.grid_columnconfigure(0, weight=1)

        self.frames = {}

        for F in (StartPage, PageOne, PageTwo, PageThree, PageFour):

            frame = F(container, self)

            self.frames[F] = frame

            frame.grid(row=0, column=0, sticky="nsew")

        self.show_frame(StartPage)

    def show_frame(self, cont):

        frame = self.frames[cont]
        frame.tkraise()

        
class StartPage(tk.Frame):

    def __init__(self, parent, controller):
        tk.Frame.__init__(self,parent)
        label = tk.Label(self, text="Welcome", font=LARGE_FONT)
        label.pack(pady=10,padx=10)
        button = tk.Button(self, text="Visit Configuring Page",
                            command=lambda: controller.show_frame(PageOne))
        button.pack()

        button2 = tk.Button(self, text="Visit Intersection Page",
                            command=lambda: controller.show_frame(PageTwo))
        button2.pack()

        button3 = tk.Button(self, text="Visit Plan",
                            command=lambda: controller.show_frame(PageThree))
        button3.pack()
        button4 = tk.Button(self, text="Visit Maps",
                            command=lambda: controller.show_frame(PageFour))
        button4.pack()

class PageOne(tk.Frame):
    f12=0
    def __init__(self, parent, controller):
        tk.Frame.__init__(self, parent)
        label = tk.Label(self, text="Configuring Page", font=LARGE_FONT)
        label.pack(pady=10,padx=10)

        button1 = tk.Button(self, text="Back to Home",
                            command=lambda: controller.show_frame(StartPage))
        button1.pack()

        button2 = tk.Button(self, text="Visit Intersection Page",
                            command=lambda: controller.show_frame(PageTwo))
        button2.pack()
        button3 = tk.Button(self, text="Visit Plan",
                            command=lambda: controller.show_frame(PageTwo))
        button3.pack()
        button4 = tk.Button(self, text="Visit Maps",
                            command=lambda: controller.show_frame(PageTwo))
        button4.pack()
        self.a=tk.Label(self, text = 'Fixed:')
        self.a.place(anchor='center', relx =.37, rely=.3)
        self.variable0 = tk.StringVar(self)
        self.variable0.set("0") # default value
        self.e1=tk.OptionMenu(self,self.variable0, "0","1")
        self.e1.place(anchor='center', relx =.5, rely=.3)
        self.b=tk.Label(self, text = 'Adaptive:')
        self.b.place(anchor='center', relx =.37, rely=.35)
        self.variable = tk.StringVar(self)
        self.variable.set("0") # default value
        self.e2=tk.OptionMenu(self, self.variable, "0","1").place(anchor='center', relx =.5, rely=.35)
        self.c=tk.Label(self, text = 'FlashingRed:')
        self.c.place(anchor='center', relx =.37, rely=.40)
        self.variable1 = tk.StringVar(self)
        self.variable1.set("0") # default value
        self.e3=tk.OptionMenu(self, self.variable1, "0","1").place(anchor='center', relx =.5, rely=.40)
        self.d=tk.Label(self, text = 'FlashingYellow:')
        self.d.place(anchor='center', relx =.37, rely=.45)
        self.variable2 = tk.StringVar(self)
        self.variable2.set("0") # default value
        self.e4=tk.OptionMenu(self, self.variable2, "0","1").place(anchor='center', relx =.5, rely=.45)
        self.d1=tk.Label(self, text = 'green_Ext:')
        self.d1.place(anchor='center', relx =.37, rely=.50)
        self.variable3 = tk.StringVar(self)
        self.variable3.set("Value") # default value
        self.e5=tk.OptionMenu(self, self.variable3, "Value","101").place(anchor='center', relx =.5, rely=.50)
        self.d2=tk.Label(self, text = 'Interrupt:')
        self.d2.place(anchor='center', relx =.37, rely=.55)
        self.variable4 = tk.StringVar(self)
        self.variable4.set("101") # default value
        self.e6=tk.OptionMenu(self, self.variable4, "101","1").place(anchor='center', relx =.5, rely=.55)
        self.d3=tk.Label(self, text = 'Synch:')
        self.d3.place(anchor='center', relx =.37, rely=.60)
        self.variable5 = tk.StringVar(self)
        self.variable5.set("0") # default value
        self.e7=tk.OptionMenu(self, self.variable5, "0","1","2","3","4","5","6","7","8","9","10").place(anchor='center', relx =.5, rely=.60)
        self.d4=tk.Label(self, text = 'Plan:')
        self.d4.place(anchor='center', relx =.37, rely=.65)
        self.variable6 = tk.StringVar(self)
        self.variable6.set("0") # default value
        self.e8=tk.OptionMenu(self, self.variable6, "0","1").place(anchor='center', relx =.5, rely=.65)
        self.d5=tk.Label(self, text = 'CycleTime:')
        self.d5.place(anchor='center', relx =.37, rely=.70)
        self.e9=tk.Entry(self)
        self.e9.place(anchor='center', relx =.5, rely=.70)
        self.d6=tk.Label(self, text = 'Phase:')
        self.d6.place(anchor='center', relx =.37, rely=.75)
        self.variable8 = tk.StringVar(self)
        self.variable8.set("0") # default value
        self.e10=tk.OptionMenu(self, self.variable8, "0","1").place(anchor='center', relx =.5, rely=.75)
        self.d7=tk.Label(self, text = 'TimeZone:')
        self.d7.place(anchor='center', relx =.37, rely=.80)
        self.variable9 = tk.StringVar(self)
        self.variable9.set(" Asia/Kolkata") # default value
        self.e11=tk.OptionMenu(self, self.variable9, "Asia/Kolkata","GMT").place(anchor='center', relx =.5, rely=.80)
        self.action1 = tk.Button(self, text="Save Configration Page",command=lambda:self.print_it())
        self.action1.place(anchor='center', relx =.40, rely=.90)
    def print_it(self):
        i=0
        Configuring['Fixed:'] = self.variable0.get()
        Configuring['Adaptive'] = self.variable.get()
        Configuring['FlashingRed'] = self.variable1.get()
        Configuring['FlashingYellow'] = self.variable2.get()
        Configuring['green_Ext'] = self.variable3.get()
        Configuring['Interrupt'] = self.variable4.get()
        Configuring['Synch'] = self.variable5.get()
        Configuring['Plan'] = self.variable6.get()
        Configuring['CycleTime'] = self.e9.get()
        Configuring['Phases'] = self.variable8.get()
        Configuring['TimeZone'] = self.variable9.get()
        workbook = xlwt.Workbook() 
        print(workbook)
        worksheet=workbook.add_sheet('Configuring')
        print(worksheet)
        for key, value in Configuring.items():
            i=i+1
            worksheet.write(i,0,key)
            worksheet.write(i,1,value)
            workbook.save('exa.xls')
        print(Configuring)
        
        '''
        with open('dict.csv', 'w') as csv_file:
            writer = csv.writer(csv_file,sheet_name="configure")
            for key, value in Configuring.items():
                writer.writerow([key, value])
        print(Configuring)
        '''
class PageTwo(tk.Frame):
    def __init__(self, parent, controller):
        tk.Frame.__init__(self, parent)
        label = tk.Label(self, text="Intersection", font=LARGE_FONT)
        label.pack(pady=10,padx=10)

        button1 = tk.Button(self, text="Back to Home",
                            command=lambda: controller.show_frame(StartPage))
        button1.pack()

        button2 = tk.Button(self, text="Configuring Page",
                            command=lambda: controller.show_frame(PageOne))
        button2.pack()
        button3 = tk.Button(self, text="Visit Plan",
                            command=lambda: controller.show_frame(PageThree))
        button3.pack()
        button4 = tk.Button(self, text="Visit Maps",
                            command=lambda: controller.show_frame(PageFour))
        button4.pack()
        self.c1=tk.Label(self, text = 'Controller:')
        self.c1.place(anchor='center', relx =.37, rely=.3)
        self.f1 = tk.Entry(self)
        self.f1.place(anchor='center', relx =.5, rely=.3)
        self.c2=tk.Label(self, text = 'Num_Approaches:')
        self.c2.place(anchor='center', relx =.37, rely=.35)
        self.variable11 = tk.StringVar(self)
        self.variable11.set("0") # default value
        self.f2=tk.OptionMenu(self, self.variable11, "0","1","2","3","4").place(anchor='center', relx =.5, rely=.35)
        self.c3=tk.Label(self, text = 'Num_Movements:')
        self.c3.place(anchor='center', relx =.37, rely=.40)
        self.variable12 = tk.StringVar(self)
        self.variable12.set("0") # default value
        self.f3=tk.OptionMenu(self, self.variable12, "0","1","2","3","4","5","6","7","8","9","10","11","12").place(anchor='center', relx =.5, rely=.40) 
        self.c4=tk.Label(self, text = 'FeeFlowTravelTime:')
        self.c4.place(anchor='center', relx =.37, rely=.45)
        self.f4 = tk.Entry(self)
        self.f4.place(anchor='center', relx =.5, rely=.45)
        self.c5=tk.Label(self, text = 'Num_NoMovements:')
        self.c5.place(anchor='center', relx =.37, rely=.50)
        self.f5 = tk.Entry(self)
        self.f5.place(anchor='center', relx =.5, rely=.50)
        self.c6=tk.Label(self, text = 'NoMovementIDs:')
        self.c6.place(anchor='center', relx =.37, rely=.55)
        self.f6 = tk.Entry(self)
        self.f6.place(anchor='center', relx =.5, rely=.55)
        self.c7=tk.Label(self, text = 'Num_Plans:')
        self.c7.place(anchor='center', relx =.37, rely=.60)
        self.f7=tk.Spinbox(self, from_=0, to=10)
        self.f7.place(anchor='center', relx =.5, rely=.60)      
        self.c8=tk.Label(self, text = 'StageTimeFlashingRed:')
        self.c8.place(anchor='center', relx =.35, rely=.65)
        self.f8 = tk.Entry(self)
        self.f8.place(anchor='center', relx =.5, rely=.65)
        self.c9=tk.Label(self, text = 'StagesFlashingRed:')
        self.c9.place(anchor='center', relx =.35, rely=.70)
        self.f9 = tk.Entry(self)
        self.f9.place(anchor='center', relx =.5, rely=.70)
        self.c10=tk.Label(self, text = 'StageTimeFlashingOrange:')
        self.c10.place(anchor='center', relx =.35, rely=.75)
        self.f10 = tk.Entry(self)
        self.f10.place(anchor='center', relx =.5, rely=.75)
        self.c11=tk.Label(self, text = 'StagesFlashingOrange:')
        self.c11.place(anchor='center', relx =.35, rely=.80)
        self.f11 = tk.Entry(self)
        self.f11.place(anchor='center', relx =.5, rely=.80)
        self.c12=tk.Label(self, text = 'Synch:')
        self.c12.place(anchor='center', relx =.37, rely=.85)
        self.variablepage2 = tk.StringVar(self)
        self.variablepage2.set("Plan1Time(6 to 8)") # default value
        self.f12=tk.OptionMenu(self, self.variablepage2, "0","Plan2Time(8 to 12)","Plan3Time(12 to 18)","Plan4Time(18 to 23)","Plan5Time(23 to 6)")
        self.f12.place(anchor='center', relx =.5, rely=.85)
        self.action1 = tk.Button(self, text="Retrieve Solution Name",command=lambda:self.print_it())
        self.action1.place(anchor='center', relx =.40, rely=.90)
    def print_it(self):
        Intersection['Controller'] = self.f1.get()
        Intersection['Num_Approaches'] = self.variable11.get()
        Intersection['Num_Movements'] = self.variable12.get()
        Intersection['FeeFlowTravelTime'] = self.f4.get()
        Intersection['Num_NoMovements'] = self.f5.get()
        Intersection['NoMovements'] = self.f6.get()
        Intersection['Num_Plans'] = self.f7.get()
        Intersection['Plan#Time'] = self.variablepage2.get()
        Intersection['StageTimeFlashingRed'] = self.f8.get()
        Intersection['StagesFlashingRed'] = self.f9.get()
        Intersection['StageTimeFlashingOrange'] = self.f10.get()
        Intersection['StagesFlashingOrange'] = self.f11.get()
        print(Intersection)
class PageThree(tk.Frame):

    def __init__(self, parent, controller):
        tk.Frame.__init__(self, parent)
        label = tk.Label(self, text="Plan", font=LARGE_FONT)
        label.pack(pady=10,padx=10)
        button1 = tk.Button(self, text="Back to Home",
                            command=lambda: controller.show_frame(StartPage))
        button1.pack()

        button2 = tk.Button(self, text="Visit Configuring Page",
                            command=lambda: controller.show_frame(PageOne))
        button2.pack()
        button3 = tk.Button(self, text="Visit Interesection Page",
                            command=lambda: controller.show_frame(PageTwo))
        button3.pack()
        button4 = tk.Button(self, text="Visit Maps",
                            command=lambda: controller.show_frame(PageFour))
        button4.pack()
        self.p1=tk.Label(self, text = 'Plan Number:')
        self.p1.place(anchor='center', relx =.35, rely=.2)
        self.s1 = tk.Entry(self)
        self.s1.place(anchor='center', relx =.5, rely=.2)
        self.p2=tk.Label(self, text = 'StartTime:')
        self.p2.place(anchor='center', relx =.35, rely=.25)
        self.variable14 = tk.StringVar(self)
        self.variable14.set("6") # default value
        self.s2=tk.OptionMenu(self, self.variable14, "0","1","2","3","4","5","6","7","8","9","10","11","12").place(anchor='center', relx =.5, rely=.25)
        self.p3=tk.Label(self, text = 'Endtime:')
        self.p3.place(anchor='center', relx =.35, rely=.30)
        self.variable15 = tk.StringVar(self)
        self.variable15.set("12") # default value
        self.s3=tk.OptionMenu(self, self.variable15, "0","1","2","3","4","5","6","7","8","9","10","11","12").place(anchor='center', relx =.5, rely=.30) 
        self.p4=tk.Label(self, text = 'Cycletime:')
        self.p4.place(anchor='center', relx =.35, rely=.35)
        self.s4 = tk.Entry(self)
        self.s4.place(anchor='center', relx =.5, rely=.35)
        self.p5=tk.Label(self, text = 'Greentimes:')
        self.p5.place(anchor='center', relx =.35, rely=.40)
        self.s5 = tk.Entry(self)
        self.s5.place(anchor='center', relx =.5, rely=.40)
        self.p6=tk.Label(self, text = 'Greentimes_lower:')
        self.p6.place(anchor='center', relx =.35, rely=.45)
        self.s6 = tk.Entry(self)
        self.s6.place(anchor='center', relx =.5, rely=.45)
        self.p7=tk.Label(self, text = 'Greentimes_upper:')
        self.p7.place(anchor='center', relx =.35, rely=.50)
        self.s7=tk.Spinbox(self, from_=0, to=10)
        self.s7.place(anchor='center', relx =.5, rely=.50)      
        self.p8=tk.Label(self, text = 'Yellow:')
        self.p8.place(anchor='center', relx =.35, rely=.55)
        self.s8 = tk.Entry(self)
        self.s8.place(anchor='center', relx =.5, rely=.55)
        self.p9=tk.Label(self, text = 'Red:')
        self.p9.place(anchor='center', relx =.35, rely=.60)
        self.s9 = tk.Entry(self)
        self.s9.place(anchor='center', relx =.5, rely=.60)
        self.p10=tk.Label(self, text = 'MaxLight:')
        self.p10.place(anchor='center', relx =.35, rely=.65)
        self.s10 = tk.Entry(self)
        self.s10.place(anchor='center', relx =.5, rely=.65)
        self.p11=tk.Label(self, text = 'offset_tol:')
        self.p11.place(anchor='center', relx =.35, rely=.70)
        self.s11 = tk.Entry(self)
        self.s11.place(anchor='center', relx =.5, rely=.70)
        self.p11=tk.Label(self, text = 'offset_maxDed:')
        self.p11.place(anchor='center', relx =.35, rely=.75)
        self.s11 = tk.Entry(self)
        self.s11.place(anchor='center', relx =.5, rely=.75)
        self.p11=tk.Label(self, text = 'offset_maxExt:')
        self.p11.place(anchor='center', relx =.35, rely=.80)
        self.s11 = tk.Entry(self)
        self.s11.place(anchor='center', relx =.5, rely=.80)
        self.p11=tk.Label(self, text = 'offset_phase:')
        self.p11.place(anchor='center', relx =.35, rely=.85)
        self.s11 = tk.Entry(self)
        self.s11.place(anchor='center', relx =.5, rely=.85)
        self.p11=tk.Label(self, text = 'Stages:')
        self.p11.place(anchor='center', relx =.35, rely=0.90)
        self.s11 = tk.Entry(self)
        self.s11.place(anchor='center', relx =.5, rely=0.90)
        self.p12=tk.Label(self, text = 'StageTime:')
        self.p12.place(anchor='center', relx =.35, rely=0.95)
        self.variable16 = tk.StringVar(self)
        self.variable16.set("G1") # default value
        self.s12=tk.OptionMenu(self, self.variable16, "G1","G2","G3","G4").place(anchor='center', relx =.5, rely=0.95) 
        self.p13=tk.Label(self, text = 'Num_Pedestrian:')
        self.p13.place(anchor='center', relx =.65, rely=.2)
        self.variable17 = tk.StringVar(self)
        self.variable17.set("0") # default value
        self.s13=tk.OptionMenu(self, self.variable17, "0","1","2","3","4").place(anchor='center', relx =.75, rely=.2) 
        self.p14=tk.Label(self, text = 'Phase:')
        self.p14.place(anchor='center', relx =.65, rely=.25)
        self.s14 = tk.Entry(self)
        self.s14.place(anchor='center', relx =.75, rely=.25)
        self.p15=tk.Label(self, text = 'Stages:')
        self.p15.place(anchor='center', relx =.65, rely=.30)
        self.s15 = tk.Entry(self)
        self.s15.place(anchor='center', relx =.75, rely=.30)
        self.p16=tk.Label(self, text = 'Num_Pedestrian:')
        self.p16.place(anchor='center', relx =.65, rely=.35)
        self.s16 = tk.Entry(self)
        self.s16.place(anchor='center', relx =.75, rely=.35)
        self.action1 = tk.Button(self, text="Save Plan",command=lambda:self.print_it())
        self.action1.place(anchor='center', relx =.70, rely=.40)
    def print_it(self):
        Plan['Controller'] = self.f1.get()
        Plan['Num_Approaches'] = self.variable11.get()
        Plan['Num_Movements'] = self.variable12.get()
        Plan['FeeFlowTravelTime'] = self.f4.get()
        Plan['Num_NoMovements'] = self.f5.get()
        Plan['NoMovements'] = self.f6.get()
        Plan['Num_Plans'] = self.f7.get()
        Plan['Plan#Time'] = self.variablepage2.get()
        Plan['StageTimeFlashingRed'] = self.f8.get()
        Plan['StagesFlashingRed'] = self.f9.get()
        Plan['StageTimeFlashingOrange'] = self.f10.get()
        Plan['StagesFlashingOrange'] = self.f11.get()
class PageFour(tk.Frame):

    def __init__(self, parent, controller):
        tk.Frame.__init__(self, parent)
        label = tk.Label(self, text="MAPS", font=LARGE_FONT)
        label.pack(pady=10,padx=10)
        button1 = tk.Button(self, text="Back to Home",
                            command=lambda: controller.show_frame(StartPage))
        button1.pack()

        button2 = tk.Button(self, text="Visit Configuring Page",
                            command=lambda: controller.show_frame(PageOne))
        button2.pack()
        button3 = tk.Button(self, text="Visit Interesection Page",
                            command=lambda: controller.show_frame(PageTwo))
        button3.pack()
        button4 = tk.Button(self, text="Visit Plan",
                            command=lambda: controller.show_frame(PageThree))    
        button4.pack()
       #This Block of Code will be fixed in the Upcoming versions    
        b2 = tk.Button(self, text = "print", command = lambda: self.OpenUrl())
        b2.pack()
    def OpenUrl(self):
        webbrowser.open_new("http://127.0.0.1:5000/")
if __name__ == "__main__":
    server = Process(target=app1.run)
    server.start()
    app = SeaofBTCapp()
    app.geometry("1920x1920")
    app.mainloop()
    def __init__(self, parent, controller):
        tk.Frame.__init__(self, parent)
        label = tk.Label(self, text="Plan", font=LARGE_FONT)
        label.pack(pady=10,padx=10)
        button1 = tk.Button(self, text="Back to Home",
                            command=lambda: controller.show_frame(StartPage))
        button1.pack()

        button2 = tk.Button(self, text="Visit Configuring Page",
                            command=lambda: controller.show_frame(PageOne))
        button2.pack()
        button3 = tk.Button(self, text="Visit Interesection Page",
                            command=lambda: controller.show_frame(PageTwo))
        button3.pack()
        button4 = tk.Button(self, text="Visit Maps",
                            command=lambda: controller.show_frame(PageFour))