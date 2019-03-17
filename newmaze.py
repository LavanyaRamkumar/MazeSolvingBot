from collections import deque
from heapq import heappop, heappush


def maze2graph(maze):
    height = len(maze)
    width = len(maze[0]) if height else 0
    graph = {(i, j): [] for j in range(width) for i in range(height) if not maze[i][j]}
    for row, col in graph.keys():
        if row < height - 1 and not maze[row + 1][col]:
            graph[(row, col)].append(("S", (row + 1, col)))
            graph[(row + 1, col)].append(("N", (row, col)))
        if col < width - 1 and not maze[row][col + 1]:
            graph[(row, col)].append(("E", (row, col + 1)))
            graph[(row, col + 1)].append(("W", (row, col)))
    return graph

def find_path_bfs(maze):
    start, goal = (1, 1), (len(maze) - 2, len(maze[0]) - 2)
    queue = deque([("", start)])
    visited = set()
    graph = maze2graph(maze)
    while queue:
        path, current = queue.popleft()
        if current == goal:
            return path
        if current in visited:
            continue
        visited.add(current)
        for direction, neighbour in graph[current]:
            queue.append((path + direction, neighbour))
    return []

def heuristic(cell, goal):
    return abs(cell[0] - goal[0]) + abs(cell[1] - goal[1])


def find_path_astar(maze):
    start, goal = (1, 1), (len(maze) - 2, len(maze[0]) - 2)
    pr_queue = []
    heappush(pr_queue, (0 + heuristic(start, goal), 0, "", start))
    visited = set()
    graph = maze2graph(maze)
    while pr_queue:
        _, cost, path, current = heappop(pr_queue)
        if current == goal:
            return path
        if current in visited:
            continue
        visited.add(current)
        for direction, neighbour in graph[current]:
            heappush(pr_queue, (cost + heuristic(neighbour, goal), cost + 1,
                                path + direction, neighbour))
    return []

def moveval(dirval):
    carddir = {'N': 90, 'E': 0, 'S': 270, 'W': 180}
    movdir = {0 : 'F', 90: 'LF', 270: 'RF'}
    angle = (carddir[dirval[1]] - carddir[dirval[0]])%360
    return movdir[angle]

def directions(path):
    curr = 'E'
    direction = ''
    for a in path:
        direction = direction + moveval(curr+a)
        curr = a
    return direction    


infile = open("values.txt", "r")

val = infile.read().split("\n")

maze = []

for a in val:
    if a=='':
        continue
    else:
        maze.append([1]+[int(b) for b in a.split(" ")]+[1])

maze = [[1]*len(maze[0])]+maze+[[1]*len(maze[0])]
for a in maze:
    print(a)

finaldir = directions(find_path_astar(maze))
print(finaldir)


#This is the part that calls the movement functions.
for a in finaldir:
    if a=='R':
        #right()
        print("right")
    if a=='F':
        #forward()
        print("front")
    if a=='L':
        #left()
        print("left")
