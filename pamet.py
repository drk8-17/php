def search(current, startAmount, points):
    plans = [[]]
    for i in range(len(points)):
        plans[0].append(0)
    turn = 0
    plans[0][current] = startAmount
    while True:
        turn = turn+1
        for each in plans:
            for every in each:
                for i in range(len(points[every])):
                    if amount>=points[current][1]:
                        times = (amount-amount%points[current][1])/points[current][1]
                        amount = amount%points[current][1]
                        for i in range(times):

    









points = [] #list of tuples of list of connections indexes+pay+get
startAmount = 1
#select starting points wth positive ratios
selected = [] #indexes
for each in selected:
    search(each, startAmount, points)
