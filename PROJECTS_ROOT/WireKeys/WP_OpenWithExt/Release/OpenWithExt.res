        ��  ��                  �      �� ���    0           ��       �Ȁ
     � �     W i r e K e y s   p l u g i n   -   W i n d o w s   t r a i t s   o p t i o n s       M S   S a n s   S e r i f              P� � 4     ��� O K             P � �  	  ��� W r i t t e n   b y   I l j a   R a z i n k o v ,   W i r e d P l a n e   L a b s   @ 2 0 0 8                P  �   �  ��� E d i t   l i s t   o f   f o l d e r s            �P ( � x �   ���               P� ( 4  �   ��� M o v e   u p                 P� < 4  �   ��� M o v e   d o w n                 P� P 4  �   ��� R e m o v e               P� � 4  �   ��� A d d              � �P � �  �   ���               P� � 4     ��� O p t i o n s       (      �� ���     0        (                  �  �          ���������������������������������������������������������fffffffffffffffffffffffffffffffff���������W��T��}�{�x�u�r�
p�m�k�i�g� f�������\�͜�������n��n��n��n��n��n��n��n��2�˙�� f�fff$��f��&�����z��z��z��z��z��z��z��z��2�˙��g�fff'��f��,�ř��������������������������H�����i�fff)��f��2�˙��������������������������H�����k�fff,��n��3�̙��������������������������H�����m�fff.��z��,�����������������������������l�����A�����0�Ʌ�����,��,��,��,��,��,��'��#������T��T�����2�ˑ��������������������������������O���������o��������������������`��\��Y��W��T��Q��������������o��������������e�����������������������������������o��n��l��k���������������������������������������������������������������������������������������������������������������������������������      �� ��     0 	        �4   V S _ V E R S I O N _ I N F O     ���               ?                         D   S t r i n g F i l e I n f o       0 4 0 9 0 4 b 0   Z !  C o m m e n t s   W i r e K e y s   p l u g i n ` s   S h e l l   e x t e n d e r     @   C o m p a n y N a m e     W i r e d P l a n e   L a b s   � Y  F i l e D e s c r i p t i o n     " J u m p   t o   f o l d e r "   e x t e n s i o n   f o r   E x p l o r e r   a n d   " F a v o u r i t e   f o l d e r s "   f o r   O p e n / S a v e   A s   d i a l o g s     6   F i l e V e r s i o n     1 ,   0 ,   0 ,   1     >   I n t e r n a l N a m e   W P _ O p e n W i t h E x t     d    L e g a l C o p y r i g h t   W i r e d P l a n e   L a b s ,   C o p y r i g h t   2 0 0 4   \   L e g a l T r a d e m a r k s     W i r e d P l a n e   L a b s ,   W i r e K e y s   (    O L E S e l f R e g i s t e r     N   O r i g i n a l F i l e n a m e   W P _ O p e n W i t h E x t . w k p          P r i v a t e B u i l d   d "  P r o d u c t N a m e     W i r e K e y s   p l u g i n ` s   s h e l l   e x t e n s i o n   :   P r o d u c t V e r s i o n   1 ,   0 ,   0 ,   1          S p e c i a l B u i l d   D    V a r F i l e I n f o     $    T r a n s l a t i o n     	��  0   R E G I S T R Y   ��e       0	        HKCR
{
	WKShellExt.WKShellExtender.1 = s 'WKShellExtender Class'
	{
		CLSID = s '{AC95BA2C-8211-45D4-AB5C-C2A9BCCC8FB6}'
	}

	WKShellExt.WKShellExtender = s 'WKShellExtender Class'
	{
		CLSID = s '{AC95BA2C-8211-45D4-AB5C-C2A9BCCC8FB6}'
		CurVer = s 'WKShellExt.WKShellExtender.1'
	}

	NoRemove CLSID
	{
		ForceRemove {AC95BA2C-8211-45D4-AB5C-C2A9BCCC8FB6} = s 'WKShellExtender Class'
		{
			ProgID = s 'WKShellExt.WKShellExtender.1'
			VersionIndependentProgID = s 'WKShellExt.WKShellExtender'
			ForceRemove 'Programmable'
			InprocServer32 = s '%MODULE%'
			{
				val ThreadingModel = s 'Apartment'
			}
			'TypeLib' = s '{AC95BA2C-8211-45D4-AB5C-C2A9BCCC8FB6}'
		}
	}
	
    NoRemove *
    {
        NoRemove ShellEx
        {
            NoRemove ContextMenuHandlers
            {
                WKShellExtender = s '{AC95BA2C-8211-45D4-AB5C-C2A9BCCC8FB6}'
            }
        }
    }
    
	NoRemove Folder
	{
		NoRemove ShellEx
		{
			NoRemove ContextMenuHandlers
			{
				ForceRemove WKShellExtender = s '{AC95BA2C-8211-45D4-AB5C-C2A9BCCC8FB6}'
			}
		}
	}


    NoRemove Directory
    {
        NoRemove Background
        {
            NoRemove ShellEx
            {
                NoRemove ContextMenuHandlers
                {
                    ForceRemove WKShellExtender = s '{AC95BA2C-8211-45D4-AB5C-C2A9BCCC8FB6}'
                }
            }
        }
    }
}
   >       �� ��     0	                 W K S H E L L E x t e n d e r                         