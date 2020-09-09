#include<stdio.h>
int main()
{
int n, ar[50],c=0;
scanf("%d",&n);
for(int i=0;i<n;i++)
scanf("%d",&ar[i]);
int i=0;
while (i!=n-1) 
{
for(int j=i+1;j<n;j++)
{
    if(ar[j]==ar[i])
    {
    for(int k=j;k<n-1;k++)
    {
        ar[k]=ar[k+1];
    }
    c++;
     n--;
    break;
    }
}
i++;
}
printf("%d",c);
}