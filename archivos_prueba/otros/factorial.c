

int factorial(int n)
{
    if(n!=1)
     return n*factorial(n-1);
}


int mult (int x, int y)
{
  return x * y;
}


int main()
{
    int n;
    int vector[10];

    n = 3;
    
    printf("%d\n", factorial(3));

    
    return 0;
}
