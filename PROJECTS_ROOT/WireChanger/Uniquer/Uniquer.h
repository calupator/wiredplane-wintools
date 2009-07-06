// Uniquer.h : main header file for the Uniquer DLL
//

#if !defined(AFX_Uniquer_H__D57A0563_4856_4DF0_BCDC_981C1E9DBE6F__INCLUDED_)
#define AFX_Uniquer_H__D57A0563_4856_4DF0_BCDC_981C1E9DBE6F__INCLUDED_

#if _MSC_VER > 1000
#pragma once
#endif // _MSC_VER > 1000

#ifndef __AFXWIN_H__
	#error include 'stdafx.h' before including this file for PCH
#endif

#include "resource.h"		// main symbols
#include "..\..\SmartWires\SmartWndSizer\SmartWndSizer.h"
#include "..\..\SmartWires\BitmapUtils\BMPUtil.h"
#include "..\..\SmartWires\BitmapUtils\Dib.h"
#include "..\..\SmartWires\SystemUtils\SupportClasses.h"
#include "..\..\SmartWires\SystemUtils\WCRenders.h"
/////////////////////////////////////////////////////////////////////////////
// CUniquerApp
// See Uniquer.cpp for the implementation of this class
//

class CUniquerApp : public CWinApp
{
public:
	CUniquerApp();

// Overrides
	// ClassWizard generated virtual function overrides
	//{{AFX_VIRTUAL(CUniquerApp)
	//}}AFX_VIRTUAL

	//{{AFX_MSG(CUniquerApp)
		// NOTE - the ClassWizard will add and remove member functions here.
		//    DO NOT EDIT what you see in these blocks of generated code !
	//}}AFX_MSG
	DECLARE_MESSAGE_MAP()
};

/////////////////////////////////////////////////////////////////////////////

//{{AFX_INSERT_LOCATION}}
// Microsoft Visual C++ will insert additional declarations immediately before the previous line.

#endif // !defined(AFX_Uniquer_H__D57A0563_4856_4DF0_BCDC_981C1E9DBE6F__INCLUDED_)
